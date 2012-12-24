<?php

/**
 * This is the model class for table "tbl_item_area".
 *
 * The followings are the available columns in table 'tbl_item_area':
 * @property integer $item_area_id
 * @property integer $proj_item_id
 * @property integer $area_id
 * @property integer $amount
 *
 * The followings are the available model relations:
 * @property ProjItem $projItem
 */
class Item_area extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Item_area the static model class
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
		return 'tbl_item_area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_area_id, proj_item_id, area_id, amount', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_area_id, proj_item_id, area_id, amount', 'safe', 'on'=>'search'),
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
			'projItem' => array(self::BELONGS_TO, 'ProjItem', 'proj_item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'item_area_id' => 'Item Area',
			'proj_item_id' => 'Proj Item',
			'area_id' => 'Area',
			'amount' => 'Amount',
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

		$criteria->compare('item_area_id',$this->item_area_id);
		$criteria->compare('proj_item_id',$this->proj_item_id);
		$criteria->compare('area_id',$this->area_id);
		$criteria->compare('amount',$this->amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}