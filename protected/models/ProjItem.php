<?php

/**
 * This is the model class for table "tbl_proj_item".
 *
 * The followings are the available columns in table 'tbl_proj_item':
 * @property integer $proj_item_id
 * @property integer $item_id
 * @property string $descr
 * @property integer $supplier_id
 * @property double $planned
 * @property double $unit_price
 * @property double $amount
 * @property integer $proj_category_id
 * @property string $create_time
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property ItemArea[] $itemAreas
 * @property Offer $offer
 * @property Item $item
 * @property ProjCategory $projCategory
 */
class ProjItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProjItem the static model class
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
		return 'tbl_proj_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, create_time, create_user_id, update_user_id, update_time', 'required'),
			array('item_id, supplier_id, proj_category_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('planned, unit_price, amount', 'numerical'),
			array('descr', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proj_item_id, item_id, descr, supplier_id, planned, unit_price, amount, proj_category_id, create_time, create_user_id, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'itemAreas' => array(self::HAS_MANY, 'ItemArea', 'proj_item_id'),
			'offer' => array(self::HAS_MANY, 'Offer', 'offer_id'),
			'item' => array(self::BELONGS_TO, 'Item', 'item_id'),
			'projCategory' => array(self::BELONGS_TO, 'ProjCategory', 'proj_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proj_item_id' => 'Proj Item',
			'item_id' => 'Item',
			'descr' => 'Descr',
			'supplier_id' => 'Supplier',
			'planned' => 'Planned',
			'unit_price' => 'Unit Price',
			'amount' => 'Amount',
			'proj_category_id' => 'Proj Category',
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

		$criteria->compare('proj_item_id',$this->proj_item_id);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('supplier_id',$this->supplier_id);
		$criteria->compare('planned',$this->planned);
		$criteria->compare('unit_price',$this->unit_price);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('proj_category_id',$this->proj_category_id);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}