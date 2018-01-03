<?php

// File: /app/Controller/PostsController.php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash','Paginator');

    public function index() {
        $paginate = array(
            'limit' => 9,
            'order' => array(
                'Post.id' => 'desc'
            )
        );
        $this->Paginator->settings = $paginate;
        $posts = $this->Paginator->paginate('Post');
        $this->set('posts', $posts);
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
    }
}