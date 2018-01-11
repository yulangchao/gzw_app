<?php
class Video extends AppModel
{
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank',
        ),
        'body' => array(
            'rule' => 'notBlank',
        ),
    );
    public $brwConfig = array(
        'files' => array(
            'main' => array(
                'name_category' => 'videos',
                'index' => true,
                'description' => false,
            ),
        ),
    );
}
