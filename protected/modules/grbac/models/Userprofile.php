<?php

class Userprofile extends CActiveRecord
{
	/**
	 * The followings are the available columns in table 'user_profiles':
	 * @var integer $id
	 * @var integer $uid
	 * @var string $type
	 * @var string $name_f
	 * @var string $name_m
	 * @var string $name_l
	 * @var integer $avatar
	 * @var integer $dob
	 * @var integer $gender
	 * @var string $email_alt
	 * @var integer $fax
	 * @var integer $phone
	 * @var integer $cell
	 * @var integer $signature
	 * @var integer $aim
	 * @var integer $yim
	 * @var integer $live
	 * @var integer $website
	 * @var integer $is_public_dob
	 * @var integer $is_public_email
	 * @var integer $is_public_phone
	 * @var integer $is_public_cell
	 * @var integer $active
	 */

	/**
	 * Returns the static model of the specified AR class.
	 * @return CActiveRecord the static model class
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
		return 'user_profiles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid', 'required'),
			array('uid, avatar, dob, gender, fax, phone, cell, signature, aim, yim, live, website, is_public_dob, is_public_email, is_public_phone, is_public_cell, active', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>1),
			array('name_f, name_m, name_l', 'length', 'max'=>20),
			array('email_alt', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uid, type, name_f, name_m, name_l, avatar, dob, gender, email_alt, fax, phone, cell, signature, aim, yim, live, website, is_public_dob, is_public_email, is_public_phone, is_public_cell, active', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'uid' => 'Uid',
			'type' => 'Type',
			'name_f' => 'Name F',
			'name_m' => 'Name M',
			'name_l' => 'Name L',
			'avatar' => 'Avatar',
			'dob' => 'Dob',
			'gender' => 'Gender',
			'email_alt' => 'Email Alt',
			'fax' => 'Fax',
			'phone' => 'Phone',
			'cell' => 'Cell',
			'signature' => 'Signature',
			'aim' => 'Aim',
			'yim' => 'Yim',
			'live' => 'Live',
			'website' => 'Website',
			'is_public_dob' => 'Is Public Dob',
			'is_public_email' => 'Is Public Email',
			'is_public_phone' => 'Is Public Phone',
			'is_public_cell' => 'Is Public Cell',
			'active' => 'Active',
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

		$criteria->compare('id',$this->id);

		$criteria->compare('uid',$this->uid);

		$criteria->compare('type',$this->type,true);

		$criteria->compare('name_f',$this->name_f,true);

		$criteria->compare('name_m',$this->name_m,true);

		$criteria->compare('name_l',$this->name_l,true);

		$criteria->compare('avatar',$this->avatar);

		$criteria->compare('dob',$this->dob);

		$criteria->compare('gender',$this->gender);

		$criteria->compare('email_alt',$this->email_alt,true);

		$criteria->compare('fax',$this->fax);

		$criteria->compare('phone',$this->phone);

		$criteria->compare('cell',$this->cell);

		$criteria->compare('signature',$this->signature);

		$criteria->compare('aim',$this->aim);

		$criteria->compare('yim',$this->yim);

		$criteria->compare('live',$this->live);

		$criteria->compare('website',$this->website);

		$criteria->compare('is_public_dob',$this->is_public_dob);

		$criteria->compare('is_public_email',$this->is_public_email);

		$criteria->compare('is_public_phone',$this->is_public_phone);

		$criteria->compare('is_public_cell',$this->is_public_cell);

		$criteria->compare('active',$this->active);

		return new CActiveDataProvider('Userprofile', array(
			'criteria'=>$criteria,
		));
	}
}