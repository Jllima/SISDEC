<?php
App::uses('AppController', 'Controller');
/**
 * SisdecRequesters Controller
 *
 * @property SisdecRequester $SisdecRequester
 * @property PaginatorComponent $Paginator
 */
class SisdecRequestersController extends AppController {

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
		$this->SisdecRequester->recursive = 0;
		$this->set('sisdecRequesters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SisdecRequester->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec requester'));
		}
		$options = array('conditions' => array('SisdecRequester.' . $this->SisdecRequester->primaryKey => $id));
		$this->set('sisdecRequester', $this->SisdecRequester->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SisdecRequester->create();
			if ($this->SisdecRequester->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec requester has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec requester could not be saved. Please, try again.'));
			}
		}
		$sisdecOccurrences = $this->SisdecRequester->SisdecOccurrence->find('list');
		$sisdecNeighborhoods = $this->SisdecRequester->SisdecNeighborhood->find('list');
		$this->set(compact('sisdecOccurrences', 'sisdecNeighborhoods'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SisdecRequester->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec requester'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SisdecRequester->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec requester has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec requester could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SisdecRequester.' . $this->SisdecRequester->primaryKey => $id));
			$this->request->data = $this->SisdecRequester->find('first', $options);
		}
		$sisdecOccurrences = $this->SisdecRequester->SisdecOccurrence->find('list');
		$sisdecNeighborhoods = $this->SisdecRequester->SisdecNeighborhood->find('list');
		$this->set(compact('sisdecOccurrences', 'sisdecNeighborhoods'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SisdecRequester->id = $id;
		if (!$this->SisdecRequester->exists()) {
			throw new NotFoundException(__('Invalid sisdec requester'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SisdecRequester->delete()) {
			$this->Session->setFlash(__('The sisdec requester has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sisdec requester could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
