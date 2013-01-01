<?php

/**
 * This is the model class for table "tbl_project".
 *
 * The followings are the available columns in table 'tbl_project':
 * @property integer $project_id
 * @property string $descr
 * @property integer $type_id
 * @property double $location_lat
 * @property double $location_lon
 * @property string $address
 * @property integer $currency_id
 * @property double $planned
 * @property integer $uom_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Area[] $areas
 * @property Beaver[] $beavers
 * @property ProjCategory[] $projCategories
 * @property Type $type
 * @property CmbTblCurrency $currency
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'tbl_project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descr, type_id, location_lat, location_lon, address, currency_id, uom_id, create_time, create_user_id, update_user_id, update_time', 'required'),
			array('type_id, currency_id, uom_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('location_lat, location_lon, planned', 'numerical'),
			array('descr', 'length', 'max'=>200),
			array('address', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('project_id, descr, type_id, location_lat, location_lon, address, currency_id, planned, uom_id, create_time, create_user_id, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'areas' => array(self::HAS_MANY, 'Area', 'project_id'),
			'beavers' => array(self::HAS_MANY, 'Beaver', 'project_id'),
			'projCategories' => array(self::HAS_MANY, 'ProjCategory', 'project_id'),
			'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
			'currency' => array(self::BELONGS_TO, 'CmbTblCurrency', 'currency_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'project_id' => 'Project',
			'descr' => 'Description','Descr',
			'type_id' => 'Type',
			'location_lat' => 'Location Latitude',
			'location_lon' => 'Location Longitude',
			'address' => 'Address',
			'currency_id' => 'Currency',
			'planned' => 'Planned',
			'uom_id' => 'Unit Of Measure','Uom',
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

		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('location_lat',$this->location_lat);
		$criteria->compare('location_lon',$this->location_lon);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('planned',$this->planned);
		$criteria->compare('uom_id',$this->uom_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}