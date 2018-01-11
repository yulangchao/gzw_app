<?php

// File: /app/Controller/VidoesController.php
class VideosController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash','Paginator');

    public function index() {
        $paginate = array(
            'limit' => 9,
            'order' => array(
                'Video.id' => 'desc'
            )
        );
        $this->Paginator->settings = $paginate;
        $videos = $this->Paginator->paginate('Video');
        $this->set('videos', $videos );
    }

}