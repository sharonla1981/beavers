<?php

/**
 * This is the model class for table "tbl_project".
 *
 * The followings are the available columns in table 'tbl_project':
 * @property integer $project_id
 * @property string $descr
 * @property integer $type_id
 * @property integer $location_id
 * @property string $address
 * @property integer $currency_id
 * @property double $planned
 * @property integer $uom_id
 *
 * The followings are the available model relations:
 * @property Area[] $areas
 * @property ProjCategory[] $projCategories
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
			array('descr, type_id, location_id, address, currency_id, uom_id', 'required'),
			array('type_id, location_id, currency_id, uom_id', 'numerical', 'integerOnly'=>true),
			array('planned', 'numerical'),
			array('descr', 'length', 'max'=>200),
			array('address', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('project_id, descr, type_id, location_id, address, currency_id, planned, uom_id', 'safe', 'on'=>'search'),
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
			'projCategories' => array(self::HAS_MANY, 'ProjCategory', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'project_id' => 'Project',
			'descr' => 'Descr',
			'type_id' => 'Type',
			'location_id' => 'Location',
			'address' => 'Address',
			'currency_id' => 'Currency',
			'planned' => 'Planned',
			'uom_id' => 'Uom',
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
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('planned',$this->planned);
		$criteria->compare('uom_id',$this->uom_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}