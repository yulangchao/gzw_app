<?php
class Fang extends AppModel {
        public $validate = array(
        'title' => array(
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
			),
			'gallery' => array(
				'name_category' => 'Images for gallery',
				'sizes' => array('150x100', '1024_1024'),
				'index' => false,
				'description' => true,
			),
		),
	);
}