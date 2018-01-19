<?php
class Image extends AppModel {
        public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        )
    );
	var $brwConfig = array(
		'images' => array(
			'main' => array(
				'name_category' => 'Main image',
				'sizes' => array('1920x800'),
				'index' => true,
				'description' => false,
			)
		),
	);
}