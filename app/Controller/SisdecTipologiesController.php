<?php
App::uses('AppController', 'Controller');
/**
 * SisdecTipologies Controller
 *
 * @property SisdecTipology $SisdecTipology
 * @property PaginatorComponent $Paginator
 */
class SisdecTipologiesController extends AppController {

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
		$this->SisdecTipology->recursive = 0;
		$this->set('sisdecTipologies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SisdecTipology->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec tipology'));
		}
		$options = array('conditions' => array('SisdecTipology.' . $this->SisdecTipology->primaryKey => $id));
		$this->set('sisdecTipology', $this->SisdecTipology->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SisdecTipology->create();
			if ($this->SisdecTipology->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec tipology has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec tipology could not be saved. Please, try again.'));
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
		if (!$this->SisdecTipology->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec tipology'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SisdecTipology->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec tipology has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec tipology could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SisdecTipology.' . $this->SisdecTipology->primaryKey => $id));
			$this->request->data = $this->SisdecTipology->find('first', $options);
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
		$this->SisdecTipology->id = $id;
		if (!$this->SisdecTipology->exists()) {
			throw new NotFoundException(__('Invalid sisdec tipology'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SisdecTipology->delete()) {
			$this->Session->setFlash(__('The sisdec tipology has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sisdec tipology could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
