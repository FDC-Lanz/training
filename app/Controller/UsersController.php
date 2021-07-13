<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $components = array('Paginator');

	public function beforeFilter() {
		$this->Auth->allow('register');
	}

	public function register()
	{
        if ($this->request->is('post')) {
            $this->request->data['User']['created_ip'] = $this->request->ClientIp();
            if ($this->User->save($this->request->data)) {
                if ($this->Auth->login()) {
                    $this->User->id = $this->Auth->user('id');
                    $this->User->saveField('last_login_time', date('Y-m-d H:i:s'));

                    $this->redirect(array('action' => 'thankYou'));
                }
            } else {
                $this->Session->setFlash(__('User not login.'));
            }
        }
	}

	public function login()
	{
        if ($this->Auth->login()) {
            $this->redirect(
                array('controller' => 'messages', 'action' => 'messageList')
            );
        }
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->User->id = $this->Auth->user('id');
                $this->User->saveField('last_login_time', date('Y-m-d H:i:s'));
                $this->redirect(
                    array('controller' => 'messages', 'action' => 'messageList')
                );
            } else {
                $this->Session->setFlash(__('Incorrect Email or Password.'));
            }
        }
	}

	public function logout()
	{

        $this->Auth->logout();
        $this->redirect(
            array('action' => 'login')
        );
	}

	public function thankYou()
	{

	}

	public function profile()
	{

	}

	public function editProfile()
	{

	}
}
