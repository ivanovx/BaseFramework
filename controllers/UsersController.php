<?php

class UsersController extends BaseController {
    private $db;

    public function onInit() {
        $this->db = new UsersModel();
    }

    public function index() {
    	$this->title = "Users";
        $this->users = $this->db->getAll();
    }
    
    public function create() {
    	$this->title = "Create";
        if ($this->isPost) {
            $name = $_POST["username"];
            if ($this->db->createUser($name)) {
                $this->addInfoMessage("User created.");
                $this->redirect("users");
            } else {
                $this->addErrorMessage("Error creating author.");
            }
        }
    }

    public function delete($id) {
        if ($this->db->deleteUser($id)) {
            $this->addInfoMessage("User deleted.");
        } else {
            $this->addErrorMessage("Cannot delete author.");
        }
        $this->redirect("users");
    }
}