<?php

/**
 * This is the model class for table "insight_modules".
 *
 * The followings are the available columns in table 'insight_modules':
 * @property integer $id
 * @property string $module_name
 * @property integer $grid_id
 *
 * The followings are the available model relations:
 * @property InsightCharts[] $insightCharts
 * @property InsightGrids $grid
 */
class InsightModules extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InsightModules the static model class
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
		return 'insight_modules';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module_name, grid_id', 'required'),
			array('grid_id', 'numerical', 'integerOnly'=>true),
			array('module_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, module_name, grid_id', 'safe', 'on'=>'search'),
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
			'insightCharts' => array(self::HAS_MANY, 'InsightCharts', 'module_id'),
			'grid' => array(self::BELONGS_TO, 'InsightGrids', 'grid_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'module_name' => 'Module Name',
			'grid_id' => 'Grid',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('module_name',$this->module_name,true);
		$criteria->compare('grid_id',$this->grid_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}