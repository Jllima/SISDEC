<?php
App::uses('AppController', 'Controller');
/**
 * SisdecPlaces Controller
 *
 * @property SisdecPlace $SisdecPlace
 * @property PaginatorComponent $Paginator
 */
class SisdecPlacesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SisdecPlace->recursive = 0;
		$this->set('sisdecPlaces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SisdecPlace->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec place'));
		}
		$options = array('conditions' => array('SisdecPlace.' . $this->SisdecPlace->primaryKey => $id));
		$this->set('sisdecPlace', $this->SisdecPlace->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SisdecPlace->create();
			if ($this->SisdecPlace->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec place could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SisdecPlace->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec place'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SisdecPlace->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec place has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec place could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SisdecPlace.' . $this->SisdecPlace->primaryKey => $id));
			$this->request->data = $this->SisdecPlace->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SisdecPlace->id = $id;
		if (!$this->SisdecPlace->exists()) {
			throw new NotFoundException(__('Invalid sisdec place'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SisdecPlace->delete()) {
			$this->Session->setFlash(__('The sisdec place has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sisdec place could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
