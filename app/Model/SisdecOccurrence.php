<?php

App::uses('AppModel', 'Model');

/**
 * SisdecOccurrence Model
 *
 * @property SisdecTipology $SisdecTipology
 * @property SisdecPlace $SisdecPlace
 * @property SisdecSituation $SisdecSituation
 * @property SisdecSource $SisdecSource
 * @property SisdecNeighborhood $SisdecNeighborhood
 * @property SisdecRequester $SisdecRequester
 */
class SisdecOccurrence extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public function isOwnedBy($sisdecOccurrence, $user) {
        return $this->field('id', array('id' => $sisdecOccurrence, 'user_id' => $user)) === $sisdecOccurrence;
    }

    public $validate = array(
        'protocolo' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'data_abertura' => array(
            'date' => array(
                'rule' => array('date'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'descricao' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sisdec_tipology_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sisdec_place_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sisdec_situation_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sisdec_source_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sisdec_neighborhood_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'endereco_occurrence' => array(
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
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'SisdecTipology' => array(
            'className' => 'SisdecTipology',
            'foreignKey' => 'sisdec_tipology_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SisdecPlace' => array(
            'className' => 'SisdecPlace',
            'foreignKey' => 'sisdec_place_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SisdecSituation' => array(
            'className' => 'SisdecSituation',
            'foreignKey' => 'sisdec_situation_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SisdecSource' => array(
            'className' => 'SisdecSource',
            'foreignKey' => 'sisdec_source_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SisdecNeighborhood' => array(
            'className' => 'SisdecNeighborhood',
            'foreignKey' => 'sisdec_neighborhood_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'SisdecRequester' => array(
            'className' => 'SisdecRequester',
            'foreignKey' => 'sisdec_occurrence_id',
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
