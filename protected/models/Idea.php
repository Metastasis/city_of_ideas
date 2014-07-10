<?php

/**
 * This is the model class for table "idea".
 *
 * The followings are the available columns in table 'idea':
 * @property string $id
 * @property string $id_user
 * @property string $id_category
 * @property string $description
 * @property string $total_price
 * @property string $coords
 *
 * The followings are the available model relations:
 * @property CategoryIdea[] $categoryIdeas
 * @property Discussion[] $discussions
 * @property User $idUser
 * @property Category $idCategory
 * @property Photo[] $photos
 * @property SolutionIdea[] $solutionIdeas
 */
class Idea extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'idea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_category, description, total_price, coords', 'required'),
			array('id_user, id_category', 'length', 'max'=>10),
			array('total_price', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_user, id_category, description, total_price, coords', 'safe', 'on'=>'search'),
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
			'categoryIdeas' => array(self::HAS_MANY, 'CategoryIdea', 'id_idea'),
			'discussions' => array(self::HAS_MANY, 'Discussion', 'id_idea'),
			'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
			'idCategory' => array(self::BELONGS_TO, 'Category', 'id_category'),
			'photos' => array(self::HAS_MANY, 'Photo', 'id_idea'),
			'solutionIdeas' => array(self::HAS_MANY, 'SolutionIdea', 'id_idea'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_user' => 'Id User',
			'id_category' => 'Id Category',
			'description' => 'Description',
			'total_price' => 'Total Price',
			'coords' => 'Coords',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('id_user',$this->id_user,true);
		$criteria->compare('id_category',$this->id_category,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('total_price',$this->total_price,true);
		$criteria->compare('coords',$this->coords,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Idea the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
