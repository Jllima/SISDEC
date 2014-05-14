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

    public $components = array('Paginator');
    public $helpers = array('Js' => array('Jquery'));

    /**
     * index method
     *
     * @return void
     */
    /*
      public function isAuthorized($user) {
      if (!parent::isAuthorized($user)) {
      if ($this->action === 'add') {
      // Todos os usuários registrados podem criar posts
      return true;
      }

      if (in_array($this->action, array('edit', 'delete'))) {
      $postId = (int) $this->request->params['pass'][0];
      return $this->Post->isOwnedBy($postId, $user['id']);
      }
      }
      if (parent::isAuthorized($user)) { //$user['role_id'] == 1
      return true;
      }
      return false;
      } */

    public function linkBack(){
        /*
        $this->Session->write('redir', array('controller'=>$this->request->params['controller'], 'action'=>$this->request->params['action'], implode($this->request->params['pass'], '/')));*/
        //$redir = $this->Session->read('redir');
        $this->redirect($this->referer());
    }
    
    public function search() {
        // find sisdecSituations
        $situations = $this->SisdecOccurrence->SisdecSituation->find('list');
        //debug($situations);
        $this->set(compact('situations'));
    }

    //action para resultado da requisição ajax da action search 
    public function resultSearch() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->SisdecOccurrence->recursive = 0;
            $options = array(
                'conditions' => array('sisdec_situation_id' => $this->params['url']['id']),
                'fields' => array('SisdecOccurrence.protocolo', 'SisdecOccurrence.endereco_occurrence', 'SisdecNeighborhood.nome_neighborhood', 'SisdecSituation.status'));
            $ocurrences = $this->SisdecOccurrence->find('all', $options);


            $this->set(compact('ocurrences'));
        }
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

    //testando requisição ajax, com retorno em json
    public function teste2() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->SisdecOccurrence->recursive = 0;
            $options = array(
                'conditions' => array('sisdec_situation_id' => $this->params['url']['situationId']),
                'fields' => array('SisdecOccurrence.protocolo', 'SisdecOccurrence.endereco_occurrence', 'SisdecNeighborhood.nome_neighborhood', 'SisdecSituation.status'));
            $ocurrences = $this->SisdecOccurrence->find('all', $options);


            $this->set(compact('ocurrences'));
        }
    }

    public function index() {
        /*
          $this->loadModel('SisdecRequester');
          $this->SisdecOccurrence->bindModel(array(
          'hasMany' => array(
          'SisdecRequester' => array(
          'foreignKey' => false,
          'conditions' => array('SisdecRequester.sisdec_occurrence_id = SisdecOccurrence.id')
          )))); */
        //$this->layout = false;
        $this->SisdecOccurrence->recursive = 0;
        //$options = array('fields' => array('SisdecOccurrence.protocolo', 'SisdecOccurrence.endereco_occurrence', 'SisdecNeighborhood.nome_neighborhood', 'SisdecSituation.status'));
        $ocurrences = $this->SisdecOccurrence->find('all');


        $this->set(compact('ocurrences'));

        debug($ocurrences);
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
        //debug($this->SisdecOccurrence->find('first', $options));
        $this->set('sisdecOccurrence', $this->SisdecOccurrence->find('first', $options));
        
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        
        if ($this->request->is('post')) {
            //debug($this->request->data);exit;
            $this->SisdecOccurrence->create();
            $this->request->data['SisdecOccurrence']['user_id'] = $this->Auth->user('id');
            if ($this->SisdecOccurrence->saveAssociated($this->request->data)) {
                $this->Session->setFlash('A ocorrência foi cadastrada com sucesso! Verifique os dados', 'flash/flash_succes');
                return $this->redirect(array('action' => 'view', $this->SisdecOccurrence->id));
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
            //debug($this->request->data);exit;
            if ($this->SisdecOccurrence->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Editado com sucesso'));
                return $this->redirect(array('action' => 'view',$this->SisdecOccurrence->id));
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
