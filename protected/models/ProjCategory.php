<?php

/**
 * This is the model class for table "tbl_proj_category".
 *
 * The followings are the available columns in table 'tbl_proj_category':
 * @property integer $proj_category_id
 * @property integer $category_id
 * @property integer $project_id
 * @property double $planned
 * @property string $create_time
 * @property integer $create_user_id
 * @property integer $update_user_id
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Project $project
 * @property ProjItem[] $projItems
 */
class ProjCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProjCategory the static model class
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
		return 'tbl_proj_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('create_time, create_user_id, update_user_id, update_time', 'required'),
			array('proj_category_id, category_id, project_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('planned', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proj_category_id, category_id, project_id, planned, create_time, create_user_id, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'projItems' => array(self::HAS_MANY, 'ProjItem', 'proj_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proj_category_id' => 'Proj Category',
			'category_id' => 'Category',
			'project_id' => 'Project',
			'planned' => 'Planned',
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

		$criteria->compare('proj_category_id',$this->proj_category_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('planned',$this->planned);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}