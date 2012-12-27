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
 * @since 0.1.1
 */
class Usertemp extends CActiveRecord {

    public $captcha;
    public $vLink = '';

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'user_temps';
    }

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
                array('email','length','max'=>255),
                array('email','CEmailValidator'),

                array('active', 'numerical', 'integerOnly'=>true),

                //on insert (and register) check them all:
                array('email', 'required', 'on'=>array('insert', 'register', 'register_passive')),

                //on insert, update and register:
                array('email', 'unique', 'on'=>array('insert', 'update', 'register')),

                //on register
                array('captcha', 'captcha', 'allowEmpty'=>!extension_loaded('gd'), 'on'=>array('register')),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    public function safeAttributes() {
        return array(
                'email',
                'register' => 'email, captcha',
        );
    }
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'captcha' => 'Verification code',
        );
    }

    protected function afterSave() {
        //assign default role to this new login if told so in configuration
        // Move this to validation suceess
        /*
        if($this->isNewRecord) {
            $defaultRole = Yii::app()->getModule('grbac')->defaultRole;
            if (($this->uid) && (!empty($defaultRole))) {
                $auth = Yii::app()->authManager;
                $auth->assign($defaultRole, $userid=$this->uid , $bizRules=null, $data=null);
            }
        }
         * */
        return parent::afterSave();
    }

    protected function beforeValidate() {
        if($this->isNewRecord) {
            if(!Yii::app()->getModule('grbac')->emailConfirmation)
               $this->addError('email', 'For short form, emailConfirmation must be true');

            // Check email unique in User
            $user = User::model()->find('email=:email',array(':email'=>$this->email));
            if ($user) $this->addError('email','Email is a registered member');
        }
        return true;
    }


    public function search() {
        $criteria=new CDbCriteria;
        $criteria->compare('uid',$this->uid);
        $criteria->compare('email',$this->email,true);
        return new CActiveDataProvider('Usertemp', array(
                        'criteria'=>$criteria,
        ));
    }
}