<?php
App::uses('AppModel', 'Model');
/**
 * SisdecTipology Model
 *
 * @property SisdecOccurrence $SisdecOccurrence
 */
class SisdecTipology extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

  public $displayField = 'tipo'; 

	public $validate = array(
		'tipo' => array(
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
		'SisdecOccurrence' => array(
			'className' => 'SisdecOccurrence',
			'foreignKey' => 'sisdec_tipology_id',
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
