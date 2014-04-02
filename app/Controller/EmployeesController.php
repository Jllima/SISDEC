<?php
  class EmployeesController extends AppController{
  	public function index(){
       $employees = $this->Employee->find('all');
       debug($employees);
       $this->set(compact('employees'));
  	}
    public function listEmployees($id = null){
    	 //$this -> Employee -> recursive = -2;
    	 $options = array('fields' => array('nome','cpf'),'conditions'=>array('department_id'=>$id));
    	 $employees = $this->Employee->find('all',$options);
    	 debug($employees);
    	 $this->set(compact('employees'));
    }
    private function getDepartments(){
    	 $options = array('fields' => array('id','nome'));
       $departments = $this->Employee->Department->find('list',$options);
       $this->set(compact('departments'));
    }

  	public function add(){
  		 if($this->request->is('post')){
           if($this->Employee->save($this->request->data)){
           	  $this->Session->setFlash('O empregado foi adicionado!');
              $this->redirect(array('action'=>'index'));
           }
     	  }
     	  //self::getDepartments();
     	  //Popular o dropdow
     	  $departments = $this -> Employee -> Department-> find('list');     	  
     	  $this -> set (compact('departments'));
    }
  	public function view($id = null){
       $this->Employee->id=$id;
       $employee = $this->Employee->read();
       $this->set('employee',$employee);
    }
  	public function edit($id = null){
  		  $this->Employee->id=$id;
       if($this->request->is('get')){
        	 $this->request->data = $this->Employee->read();
        	 //debug($this->request->data);
        }else{
        	 if($this->Employee->save($this->request->data)){
        	 	  $this->Session->setFlash('Dados atualizados!');
        	 	  $this->redirect(array('action'=>'index'));
        	 }
        }
       self::getDepartments();
  	}
  	public function delete($id = null){
  		if($id){
         	   if($this->Employee->delete($id)){
                $this->Session->setFlash('Empregado excluido com sucesso!');
                $this->redirect(array('action'=>'index')); 
         	   }
         }
    }
  }