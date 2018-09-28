<?php

// File: /app/Controller/FangsController.php
class FangsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash','Paginator');

    public function index() {
        $paginate = array(
            'limit' => 9,
            'order' => array(
                'Fang.id' => 'desc'
            )
        );
        $this->Paginator->settings = $paginate;
        $fangs = $this->Paginator->paginate('Fang');
        $this->set('fangs', $fangs);
    }

    public function click($id) {
        $this->autoRender = false;
        if ($this->request->is('ajax')) {
            $this->Fang->updateAll(
                array('views' => 'views+1'),                    
                array('id' => $id)
            );
        }
    }

}