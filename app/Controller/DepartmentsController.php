<?php
 class DepartmentsController extends AppController{
      public $name = 'Departments';
      
      public function index() {
      	/*$this -> Department -> recursive = 2;
      	 $options = array('order'=>array('Department.nome ASC'),
      	 	'conditions'=>array('id'=>2),
      	 	'fields'=>array('Department.nome'));*/
         $this->Department->recursive = -1;
         $departments = $this->Department->find('all');
         //debug($departments);
         $this->set(compact('departments',$departments)); 
	    }
	    
      public function add(){
       	  if($this->data){
       	      if($this->Department->save($this->data)){
       	  	     $this->Session->setFlash('Departamento adicionado com secesso!');
       	      }
       	      $this->data = array();
       	  }
      }
      public function edit($id = null){
      	  if($this->data){
              if($this->Department->save($this->data)){
              	$this->Session->setFlash('Departamento editado com sucesso!');
              	$this->redirect(array('action'=>'index'));
              }
      	  }else{
      	  	   $this->data = $this->Department->read(null,$id);
      	  }
      }
      public function delete($id = null){
         if($id){
         	   if($this->Department->delete($id)){
                $this->Session->setFlash('Departamento excluido com sucesso!');
                $this->redirect(array('action'=>'index')); 
         	   }
         }
      }
      public  function view($id = null){
     	  $this->Department->id = $id;
     	  $this->set('department',$this->Department->read());
      }
}