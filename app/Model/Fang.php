<?php
class Fang extends AppModel {
        public $validate = array(
        'address' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );
	var $brwConfig = array(
		'images' => array(
			'main' => array(
				'name_category' => 'Main image',
				'sizes' => array('250x100'),
				'index' => true,
				'description' => false,
			)
		),
	);
}