<?php

App::uses('AppModel', 'Model');

class Message extends AppModel {
    public $validate = array(
        'to_id' => array(
            'rule' => 'notBlank'
        ),
    );
}
