<?php

App::uses('AppModel', 'Model');

class Message extends AppModel {
    public $validate = array(
        'to_id' => array(
            'rule' => 'notBlank'
        ),
    );

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'to_id'
        )
    );
}
