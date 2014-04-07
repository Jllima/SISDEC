<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('DebugKit.Toolbar', 'Session', 'Auth');

//public $helpers = array('Html', 'Form', 'Session');

    public function beforeFilter() {
        //
        $this->Auth->authenticate = array(
            AuthComponent::ALL => array(
                'userModel' => 'User',
                'fields' => array(
                    'username' => 'username',
                ),
                'scope' => array(
                    //define o escorpo do usuario, se ele estar ou apto a logar no sistema
                    'User.status' => 1,
                ),
            ),
            'Form',
        );
        //Setado como controller, utiliza o metodo isAuthorized para saber quando o usuario tem acesso permitido
        $this->Auth->authorize = 'controller';

        //define o controller e a action para login
        $this->Auth->loginAction = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login',
        );

        //define o controller e a action apos o logout do usuario
        $this->Auth->logoutRedirect = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'login',
        );

        //define o controller e a action para o login do usuario
        $this->Auth->loginRedirect = array(
            'plugin' => null,
            'controller' => 'users',
            'action' => 'index',
        );

        $this->Auth->authError = __('Você não possui autorização para executar esta ação.');

        //$this->Auth->allow('index');
        $this->Auth->allowedActions = array('display');
    }

    public function isAuthorized($user) {
        //Somente o admin tem acesso a /admin/controller/action admin_add
        if ($user['role_id'] == 1) { //!empty($this->request->params['admin']
            return true; //$user['role_id'] == 1
        }
        return false;  //!empty($user)
    }

}
