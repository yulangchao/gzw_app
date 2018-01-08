<?php

// File: /app/Controller/VidoesController.php
class VideosController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash','Paginator');

    public function index() {
        $this->set('histories', $this->History->find('all'));
    }

}