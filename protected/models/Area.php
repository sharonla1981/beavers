<?php

/**
 * This is the model class for table "tbl_area".
 *
 * The followings are the available columns in table 'tbl_area':
 * @property integer $area_id
 * @property integer $area_type_id
 * @property string $descr
 * @property integer $size
 * @property integer $project_id
 *
 * The followings are the available model relations:
 * @property AreaType $areaType
 * @property Project $project
 */
class Area extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Area the static model class
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
		return 'tbl_area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('area_type_id, descr, size', 'required'),
			array('area_type_id, size, project_id', 'numerical', 'integerOnly'=>true),
			array('descr', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('area_id, area_type_id, descr, size, project_id', 'safe', 'on'=>'search'),
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
			'areaType' => array(self::BELONGS_TO, 'AreaType', 'area_type_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'area_id' => 'Area',
			'area_type_id' => 'Area Type',
			'descr' => 'Descr',
			'size' => 'Size',
			'project_id' => 'Project',
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

		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('area_type_id',$this->area_type_id);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('size',$this->size);
		$criteria->compare('project_id',$this->project_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}