<?php
App::uses('AppModel', 'Model');
/**
 * SisdecPlace Model
 *
 * @property SisdecNeighborhood $SisdecNeighborhood
 * @property SisdecOccurrence $SisdecOccurrence
 */
class SisdecPlace extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

  public $displayField = 'area'; 

	public $validate = array(
		'area' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SisdecNeighborhood' => array(
			'className' => 'SisdecNeighborhood',
			'foreignKey' => 'sisdec_place_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'SisdecOccurrence' => array(
			'className' => 'SisdecOccurrence',
			'foreignKey' => 'sisdec_place_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
