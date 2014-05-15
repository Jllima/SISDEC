<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

    public function isAuthorized($user) {
        if (!parent::isAuthorized($user)) {
            return true;
        } elseif (parent::isAuthorized($user)) { //$user['role_id'] == 1
            return true;
        } else {
            return false;
        }
    }

    function index() {
        
    }

}
