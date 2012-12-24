<?php

/**
 * This is the model class for table "tbl_offer".
 *
 * The followings are the available columns in table 'tbl_offer':
 * @property integer $offer_id
 * @property integer $proj_item_id
 * @property integer $supplier_id
 * @property double $unit_price
 *
 * The followings are the available model relations:
 * @property Supplier $supplier
 * @property ProjItem $offer
 */
class Offer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Offer the static model class
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
		return 'tbl_offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proj_item_id', 'required'),
			array('proj_item_id, supplier_id', 'numerical', 'integerOnly'=>true),
			array('unit_price', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('offer_id, proj_item_id, supplier_id, unit_price', 'safe', 'on'=>'search'),
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
			'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
			'offer' => array(self::BELONGS_TO, 'ProjItem', 'offer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'offer_id' => 'Offer',
			'proj_item_id' => 'Proj Item',
			'supplier_id' => 'Supplier',
			'unit_price' => 'Unit Price',
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

		$criteria->compare('offer_id',$this->offer_id);
		$criteria->compare('proj_item_id',$this->proj_item_id);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('unit_price',$this->unit_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}