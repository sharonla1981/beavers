<?php
/**
 * Users AR class file.
 * --------------------
 * User validation business rules and authentication
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */

class User extends CActiveRecord {
    /**
     * The followings are the available columns in table 'users':
     * @var int    uid          - user id
     * @var string email_alt	- alternate email address
     * @var string created	- datetime
     * @var string lastlogin    - on update CURRENT_TIMESTAMP
     * @var string valid_code
     * @var string active     - boolean
     * @var string webservice - boolean
     * @var string algo       - what algo is used to encrypt
     * ...
     */

    /* @var string - capta input dtring received from user*/
    public $captcha;

    /* @var string -  */
    public $passwordOld;

    /* @var string - */
    public $passwordNew;

    /* @var string - */
    public $passwordNew_repeat;

    /* @var string - */
    public $rememberMe=false;

    public $_model;

    /**
     * Returns the static model of the specified AR class.
     * @return CActiveRecord the static model class
     */
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
                array('username','length','max'=>20),
                array('passwordNew, passwordNew_repeat','length','max'=>45, 'min'=>4),
                array('email','CEmailValidator'),
                //array('active', 'numerical', 'integerOnly'=>true),
                //array('active', 'required', 'on'=>'togle'),
                //array('active', 'required', 'on'=>'register_validation'),

                // on login:
                array('username, password', 'required', 'on'=>'login'),
                array('password', 'authenticateLogin', 'on'=>'login'),

                // on forgot sedn temp_password
                array('captcha', 'captcha', 'allowEmpty'=>!extension_loaded('gd'), 'on'=>array('temp_password')),
                array('username, email, captcha', 'isValidUser', 'on'=>'temp_password'),

                // on forgot password reset
                array('captcha', 'captcha', 'allowEmpty'=>!extension_loaded('gd'), 'on'=>array('forgot-reset')),
                array('username, email, captcha', 'isValidUser', 'on'=>'forgot-reset'),

                // on password_reset
                array('passwordNew, passwordNew_repeat', 'required', 'on'=>'password-reset'),
                array('passwordNew', 'matchPassword', 'on'=>'password-reset'),
                array('captcha', 'captcha', 'allowEmpty'=>!extension_loaded('gd'), 'on'=>array('password-reset')),

                // on personal info update:
                //array('username, email', 'required', 'on'=>'update'),

                // on password_change:
                array('passwordOld, passwordNew, passwordNew_repeat', 'required', 'on'=>'password_change'),
                array('passwordOld', 'isOldGood', 'on'=>'password_change'),
                array('passwordNew', 'matchPassword', 'on'=>'password_change'),
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     * invokes custom UserIdentity defined in grbac's component
     */
    public function authenticateLogin($attribute,$params) {
        if(!$this->hasErrors()) {  // we only want to authenticate when no input errors
            $identity = new UserIdentity($this->username, $this->password);
            $identity->authenticate();

            Yii::app()->user->login($identity);

            switch($identity->errorCode) {
                case CUserIdentity::ERROR_NONE:
                    if(Yii::app()->getModule('grbac')->enableRemember) {
                        $duration = 3600 * 24 * Yii::app()->getModule('grbac')->durationRemember;
                    } else {
                        $duration = 0;
                    }
                    Yii::app()->user->login($identity, $duration);

                    $user=User::model()->findByAttributes(array('username'=>$this->username));
                    break;
                default: // UserIdentity::ERROR_PASSWORD_INVALID
                    if ($identity->errorCode == 9) {
                        $this->addError('username','Account pending activation or disbled');
                    }
                    else {
                        $this->addError('username','Username is unknown or');
                        $this->addError('password','password is incorrect.');
                    }
                    break;
            }
        }
    }

    public function matchPassword() {
        if ( (!$this->hasErrors()) && ($this->passwordNew != $this->passwordNew_repeat) )
            $this->addError('passwordNew','New password and Password repeat do not match');
    }

    public function isOldGood() {
        if(!$this->hasErrors()) {
            $U = User::model()->find('uid='.Yii::app()->user->id);
            $password_old_crypted = hash($U->algo,$this->passwordOld.$U->salt);
            if ($U->password != $password_old_crypted)
                $this->addError('passwordOld','Old password is incorrect');
        }
    }

    public function isValidUser() {
        if(!$this->hasErrors()) {
            if ($this->email) {
                $model = $this->find('email='.Yii::app()->db->quoteValue($this->email));
            } else if ($this->username) {
                $model=$this->find('username='.Yii::app()->db->quoteValue($this->username));
            } else {
                $this->addError('email','Either username or email should be given');
                return false;
            }

            if (!isset($model->uid)) {
                $this->addError('username','Account not found with this username or email');
                $this->addError('email','');
                return false;
            }
            $this->uid = $model->uid;

        }
    }
    
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'rememberMe'=>'Remember me'
                ,'passwordOld'=>'Old Password'
                ,'passwordNew'=>'New Password'
                ,'passwordNew_repeat'=>'Confirm Password'
                ,'algo' => 'Hash Algorithm'
        );
    }

    public function safeAttributes() {
        return array(
                'login' => 'username, password, rememberMe',
        );
    }
}