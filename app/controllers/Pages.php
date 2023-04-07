<?php
    class Pages extends Controller {
        public function __construct()
        {
            $this->postModel = $this->model('Post');
        }

        public function index(){
            $post = $this->postModel->getPosts();
            $data = ["title" => "Welcome", 'posts' => $post];
            $this->view("pages/index", $data);
        }

        public function about(){
            $data = ["title" => "About Us"];
            $this->view("pages/about", $data);
        }
    }