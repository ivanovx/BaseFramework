<?php
use \lib\BaseFramework;

class HomeController extends BaseController {
    public function index() {
        $this->title = "Home";
    }
}