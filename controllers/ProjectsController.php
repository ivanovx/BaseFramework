<?php

class ProjectsController extends BaseController {
    public function onInit() {
        $this->title = "Projects";
        $this->model = new ProjectsModel();
    }
    
    public function index() {
        $this->projects = $this->model->getAll();
    }
}

