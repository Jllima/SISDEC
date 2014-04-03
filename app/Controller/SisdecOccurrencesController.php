<?php

App::uses('AppController', 'Controller');

/**
 * SisdecOccurrences Controller
 *
 * @property SisdecOccurrence $SisdecOccurrence
 * @property PaginatorComponent $Paginator
 */
class SisdecOccurrencesController extends AppController {
    #teste de commit 2
    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'RequestHandler');
    public $helpers = array('Js' => array('Jquery'));
    
    /**
     * index method
     *
     * @return void
     */
    public function index() {
        /*
          $this->loadModel('SisdecRequester');
          $this->SisdecOccurrence->bindModel(array(
          'hasMany' => array(
          'SisdecRequester' => array(
          'foreignKey' => false,
          'conditions' => array('SisdecRequester.sisdec_occurrence_id = SisdecOccurrence.id')
          )))); */

        $this->SisdecOccurrence->recursive = 0;
        $options = array('fields' => array('SisdecOccurrence.protocolo', 'SisdecOccurrence.endereco_occurrence', 'SisdecNeighborhood.nome_neighborhood', 'SisdecSituation.status'));
        $ocurrences = $this->SisdecOccurrence->find('all', $options);


        $this->set(compact('ocurrences'));

        //debug($ocurrences); 
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->SisdecOccurrence->exists($id)) {
            throw new NotFoundException(__('Invalid sisdec occurrence'));
        }
        $options = array('conditions' => array('SisdecOccurrence.' . $this->SisdecOccurrence->primaryKey => $id));
        $this->set('sisdecOccurrence', $this->SisdecOccurrence->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {    	
        if ($this->request->is('post')) {
            $this->SisdecOccurrence->create();
            if ($this->SisdecOccurrence->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('The sisdec occurrence has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sisdec occurrence could not be saved. Please, try again.'));
            }
        }

        // find sisdecTipologies
        $sisdecTipologies = $this->SisdecOccurrence->SisdecTipology->find('list');

        // find sisdecPlaces
        $sisdecPlaces = $this->SisdecOccurrence->SisdecPlace->find('list');

        // find sisdecSituations
        $sisdecSituations = $this->SisdecOccurrence->SisdecSituation->find('list');

        // find sisdecSources
        $sisdecSources = $this->SisdecOccurrence->SisdecSource->find('list');

        // find sisdecNeighborhoods
        $sisdecNeighborhoods = $this->SisdecOccurrence->SisdecNeighborhood->find('list');

        $this->set(compact('sisdecTipologies', 'sisdecPlaces', 'sisdecSituations', 'sisdecSources', 'sisdecNeighborhoods'));
    }

    // metodo para adicionar dinamicamente os bairros
    public function listar() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $bairros = $this->SisdecOccurrence->SisdecNeighborhood->find('list', array('conditions' => array(
                    'sisdec_place_id' => $this->params['url']['placeId']),
                'recursive' => -1));
            //debug($bairros);
            $this->set(compact('bairros'));
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
        if (!$this->SisdecOccurrence->exists($id)) {
            throw new NotFoundException(__('Invalid sisdec occurrence'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->SisdecOccurrence->save($this->request->data)) {
                $this->Session->setFlash(__('The sisdec occurrence has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sisdec occurrence could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('SisdecOccurrence.' . $this->SisdecOccurrence->primaryKey => $id));
            $this->request->data = $this->SisdecOccurrence->find('first', $options);
        }
        $sisdecTipologies = $this->SisdecOccurrence->SisdecTipology->find('list');
        $sisdecPlaces = $this->SisdecOccurrence->SisdecPlace->find('list');
        $sisdecSituations = $this->SisdecOccurrence->SisdecSituation->find('list');
        $sisdecSources = $this->SisdecOccurrence->SisdecSource->find('list');
        $sisdecNeighborhoods = $this->SisdecOccurrence->SisdecNeighborhood->find('list');
        $this->set(compact('sisdecTipologies', 'sisdecPlaces', 'sisdecSituations', 'sisdecSources', 'sisdecNeighborhoods'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->SisdecOccurrence->id = $id;
        if (!$this->SisdecOccurrence->exists()) {
            throw new NotFoundException(__('Invalid sisdec occurrence'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->SisdecOccurrence->delete()) {
            $this->Session->setFlash(__('The sisdec occurrence has been deleted.'));
        } else {
            $this->Session->setFlash(__('The sisdec occurrence could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
