<?php

App::uses('AllController', 'Controller');

class MessagesController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        // ユーザー自身による登録とログアウトを許可する
        $this->Auth->allow('index');
    }

    public function index(){
        $data = $this->Message->find('all');
        $this->set('data', $data);
    }

    public function addRecord(){
        if (!empty($this->data)){
            $this->Message->save($this->data);

            var_dump($this->Message);
            die();
        }
        $this->redirect('index');
    }
}