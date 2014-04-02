<?php
  class Employee extends Model{
  	 public $name = 'Employee';
    
  	 public $validate = array(
      'nome' => array(
      	   'rule' => 'notEmpty'
       ),
       'cpf' => array(
           'rule' => 'notEmpty'
       ),
       'salario' => array(
           'rule' => 'notEmpty' 
       	)
    );
  	  public $belongsTo = array('Department');
  }