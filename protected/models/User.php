<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $user_id
 * @property string $name
 * @property string $picture
 * @property string $email
 * @property string $birthday
 * @property string $password
 * @property integer $location_id
 * @property string $address
 * @property integer $profession_id
 *
 * The followings are the available model relations:
 * @property Beaver[] $beavers
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, picture, email, birthday, password, location_id', 'required'),
			array('location_id, profession_id', 'numerical', 'integerOnly'=>true),
			array('name, picture, email, address', 'length', 'max'=>50),
			array('password', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, name, picture, email, birthday, password, location_id, address, profession_id', 'safe', 'on'=>'search'),
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
			'beavers' => array(self::HAS_MANY, 'Beaver', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'name' => 'Name',
			'picture' => 'Picture',
			'email' => 'Email',
			'birthday' => 'Birthday',
			'password' => 'Password',
			'location_id' => 'Location',
			'address' => 'Address',
			'profession_id' => 'Profession',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('profession_id',$this->profession_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}