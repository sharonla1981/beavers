<?php
/**
 * RegisterForm AR class file for users table.
 * ------------------------------------------
 *
 * LICENSE: BSD
 * @copyright  2009 Gemisoft
 * @author Deepak Pradhan <deepak.pradhan@gemisoft.com>
 * @link http://grbac.gemisoft.com/
 * @version $Id$
 * @since 0.1
 */

class RegisterForm extends CActiveRecord {
    public $captcha;
    public $vLink = '';

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
        return 'user_temps';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
                array('email','length','max'=>255),
                array('email','CEmailValidator'),

                //on insert (and register) check them all:
                array('email', 'required', 'on'=>array('insert', 'register', 'register_passive')),

                //on insert, update and register:
                array('email', 'unique', 'on'=>array('insert', 'update', 'register')),

                //on register
                array('captcha', 'captcha', 'allowEmpty'=>!extension_loaded('gd'), 'on'=>array('register')),
        );
    }


    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'created'  => 'Created',
                'verified' => 'Verified',
                'captcha'  => 'Verification code',
        );
    }

    public function safeAttributes() {
        return array('email', 'register' => 'email, captcha',);
    }

    protected function beforeSave() {
        $this->created = date("Y-m-d H:i:s");
        $this->ip   = Yii::app()->request->userHostAddress;
        return parent::beforeSave();
    }

    protected function afterSave() {
        //assign default role to this new login if told so in configuration
        if($this->isNewRecord) {
            $defaultRole = Yii::app()->getModule('grbac')->defaultRole;
            if (($this->id) && (!empty($defaultRole))) {
                $auth = Yii::app()->authManager;
                $auth->assign($defaultRole, $userid=$this->uid , $bizRules=null, $data=null);
            }
        }
        return parent::afterSave();
    }

    protected function beforeValidate() {
        //if($this->isNewRecord) {
        //    if(Yii::app()->getModule('grbac')->emailConfirmation) { //outside registration, generate a validation code
        //        $this->active = 0;
        //        $this->valid_code = rand(111111111111,999999999999);
        //    }
        //}
        //return true;
    }
}