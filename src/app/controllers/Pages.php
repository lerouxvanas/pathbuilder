<?php

class Pages extends Controller{
    private $model;
    public function __construct(){
        $this->model = $this->model('User');
    }

    public function index(){
        $users = $this->model->getUsers();
        $data = [
            'title' => 'Welcome',
            'users' => $users,
        ];
        
        $this->view('pages/home', $data);
    }

    public function about(){
        $this->view('pages/about');
    }
}