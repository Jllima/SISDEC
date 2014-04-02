<?php
App::uses('AppController', 'Controller');
/**
 * SisdecSituations Controller
 *
 * @property SisdecSituation $SisdecSituation
 * @property PaginatorComponent $Paginator
 */
class SisdecSituationsController extends AppController {

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
		$this->SisdecSituation->recursive = 0;
		$this->set('sisdecSituations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SisdecSituation->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec situation'));
		}
		$options = array('conditions' => array('SisdecSituation.' . $this->SisdecSituation->primaryKey => $id));
		$this->set('sisdecSituation', $this->SisdecSituation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SisdecSituation->create();
			if ($this->SisdecSituation->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec situation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec situation could not be saved. Please, try again.'));
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
		if (!$this->SisdecSituation->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec situation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SisdecSituation->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec situation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec situation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SisdecSituation.' . $this->SisdecSituation->primaryKey => $id));
			$this->request->data = $this->SisdecSituation->find('first', $options);
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
		$this->SisdecSituation->id = $id;
		if (!$this->SisdecSituation->exists()) {
			throw new NotFoundException(__('Invalid sisdec situation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SisdecSituation->delete()) {
			$this->Session->setFlash(__('The sisdec situation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sisdec situation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
