<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar', 
		'Session', 
		'Auth' => array(
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login',
            ),
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email',
                        'password' => 'password'
                    )
                )
            ) 
        )
	);
}
