<?php
App::uses('AppController', 'Controller');
/**
 * SisdecNeighborhoods Controller
 *
 * @property SisdecNeighborhood $SisdecNeighborhood
 * @property PaginatorComponent $Paginator
 */
class SisdecNeighborhoodsController extends AppController {

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
		$this->SisdecNeighborhood->recursive = 0;
		$this->set('sisdecNeighborhoods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SisdecNeighborhood->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec neighborhood'));
		}
		$options = array('conditions' => array('SisdecNeighborhood.' . $this->SisdecNeighborhood->primaryKey => $id));
		$this->set('sisdecNeighborhood', $this->SisdecNeighborhood->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SisdecNeighborhood->create();
			if ($this->SisdecNeighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec neighborhood has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec neighborhood could not be saved. Please, try again.'));
			}
		}
		$sisdecPlaces = $this->SisdecNeighborhood->SisdecPlace->find('list');
		$this->set(compact('sisdecPlaces'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SisdecNeighborhood->exists($id)) {
			throw new NotFoundException(__('Invalid sisdec neighborhood'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SisdecNeighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The sisdec neighborhood has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sisdec neighborhood could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SisdecNeighborhood.' . $this->SisdecNeighborhood->primaryKey => $id));
			$this->request->data = $this->SisdecNeighborhood->find('first', $options);
		}
		$sisdecPlaces = $this->SisdecNeighborhood->SisdecPlace->find('list');
		$this->set(compact('sisdecPlaces'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SisdecNeighborhood->id = $id;
		if (!$this->SisdecNeighborhood->exists()) {
			throw new NotFoundException(__('Invalid sisdec neighborhood'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SisdecNeighborhood->delete()) {
			$this->Session->setFlash(__('The sisdec neighborhood has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sisdec neighborhood could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
