<?php

date_default_timezone_set("Asia/Manila");

class AppController extends Controller {
    // コンポーネントはコントローラー間で共通して使用できるパッケージ
    public $components = array(
        'Flash',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login',
                'home'
            ),
            'authError' => "You can't access that page.",
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
                ),
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($user) {
        return true;
    }

    //loginをしていないユーザーにはindexとviewを表示しないようにした
    public function beforeFilter(){
        $this->Auth->allow('index', 'view');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }

}
