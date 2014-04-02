<?php
  class Department extends Model{
     public $name = 'Department';
     public $displayField = 'nome'; 
     
     public $validate = array(
      'nome' => array(
      	   'rule' => 'notEmpty'
       ),
       'end' => array(
           'rule' => 'notEmpty'
       ),
       'gerente' => array(
           'rule' => 'notEmpty' 
       	)
     );
	   public $hasMany = array('Employee'); 
}