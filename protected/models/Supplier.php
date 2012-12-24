<?php

/**
 * This is the model class for table "tbl_supplier".
 *
 * The followings are the available columns in table 'tbl_supplier':
 * @property integer $supplier_id
 * @property string $descr
 * @property integer $city_id
 * @property integer $country_id
 * @property string $phone
 * @property string $cell_phone
 * @property string $contact_person
 * @property string $web_site
 * @property integer $beaver_id
 *
 * The followings are the available model relations:
 * @property Offer[] $offers
 */
class Supplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supplier the static model class
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
		return 'tbl_supplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descr, city_id', 'required'),
			array('city_id, country_id, beaver_id', 'numerical', 'integerOnly'=>true),
			array('descr', 'length', 'max'=>100),
			array('phone, cell_phone, contact_person, web_site', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('supplier_id, descr, city_id, country_id, phone, cell_phone, contact_person, web_site, beaver_id', 'safe', 'on'=>'search'),
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
			'offers' => array(self::HAS_MANY, 'Offer', 'supplier_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'supplier_id' => 'Supplier',
			'descr' => 'Descr',
			'city_id' => 'City',
			'country_id' => 'Country',
			'phone' => 'Phone',
			'cell_phone' => 'Cell Phone',
			'contact_person' => 'Contact Person',
			'web_site' => 'Web Site',
			'beaver_id' => 'Beaver',
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

		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('cell_phone',$this->cell_phone,true);
		$criteria->compare('contact_person',$this->contact_person,true);
		$criteria->compare('web_site',$this->web_site,true);
		$criteria->compare('beaver_id',$this->beaver_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}