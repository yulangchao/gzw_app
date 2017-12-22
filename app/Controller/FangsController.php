<?php

// File: /app/Controller/FangsController.php
class FangsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {
        $this->set('fangs', $this->Fang->find('all'));
    }

}