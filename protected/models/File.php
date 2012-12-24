<?php

/**
 * This is the model class for table "tbl_file".
 *
 * The followings are the available columns in table 'tbl_file':
 * @property integer $file_id
 * @property integer $object_type_id
 * @property integer $object_id
 * @property integer $file_type_id
 * @property string $descr
 * @property string $path
 * @property integer $extention_id
 */
class File extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return File the static model class
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
		return 'tbl_file';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('object_type_id, object_id, file_type_id, extention_id', 'numerical', 'integerOnly'=>true),
			array('descr', 'length', 'max'=>50),
			array('path', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('file_id, object_type_id, object_id, file_type_id, descr, path, extention_id', 'safe', 'on'=>'search'),
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
			'file_id' => 'File',
			'object_type_id' => 'Object Type',
			'object_id' => 'Object',
			'file_type_id' => 'File Type',
			'descr' => 'Descr',
			'path' => 'Path',
			'extention_id' => 'Extention',
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

		$criteria->compare('file_id',$this->file_id);
		$criteria->compare('object_type_id',$this->object_type_id);
		$criteria->compare('object_id',$this->object_id);
		$criteria->compare('file_type_id',$this->file_type_id);
		$criteria->compare('descr',$this->descr,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('extention_id',$this->extention_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}