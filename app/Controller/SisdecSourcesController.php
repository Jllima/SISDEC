<?php
App::uses('AppController', 'Controller');
/**
 * SisdecSources Controller
 *
 * @property SisdecSource $SisdecSource
 * @property PaginatorComponent $Paginator
 */
class SisdecSourcesController extends AppController {

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
		$this->SisdecSource->recursive = 0;
		$this->set('sisdecSources', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SisdecSource->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec source'));
		}
		$options = array('conditions' => array('SisdecSource.' . $this->SisdecSource->primaryKey => $id));
		$this->set('sisdecSource', $this->SisdecSource->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SisdecSource->create();
			if ($this->SisdecSource->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec source could not be saved. Please, try again.'));
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
		if (!$this->SisdecSource->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec source'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SisdecSource->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec source has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec source could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SisdecSource.' . $this->SisdecSource->primaryKey => $id));
			$this->request->data = $this->SisdecSource->find('first', $options);
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
		$this->SisdecSource->id = $id;
		if (!$this->SisdecSource->exists()) {
			throw new NotFoundException(__('Invalid sisdec source'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SisdecSource->delete()) {
			$this->Session->setFlash(__('The sisdec source has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sisdec source could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
