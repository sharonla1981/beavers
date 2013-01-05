<?php

/**
 * This is the model class for table "tbl_beaver".
 *
 * The followings are the available columns in table 'tbl_beaver':
 * @property integer $beaver_id
 * @property integer $user_id
 * @property integer $project_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property Project $project
 */
class Beaver extends CActiveRecord
{   
        public $verifyCode; // Captcha
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Beaver the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_beaver';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, project_id, create_time, create_user_id, update_user_id, update_time', 'required'),
			array('user_id, project_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('beaver_id, user_id, project_id, create_time, create_user_id, update_user_id, update_time', 'safe', 'on'=>'search'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>CCaptcha::checkRequirements() || !Yum::module()->enableCaptcha),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'beaver_id' => 'Beaver',
			'user_id' => 'User',
			'project_id' => 'Project',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('beaver_id',$this->beaver_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}