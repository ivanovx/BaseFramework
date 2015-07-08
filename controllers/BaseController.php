<?php

abstract class BaseController {
    private $controllerName;
    private $actionName;
    private $layoutName = DEFAULT_LAYOUT;
    private $isViewRendered = false;
    private $isPost = false;
   
    public function __construct($controllerName, $actionName) {
        $this->controllerName = $controllerName;
        $this->actionName = $actionName;
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $this->isPost = true;
        }
        $this->onInit();
    }

    protected function onInit() {
        
    }
    
    public abstract function index();
  
    public function renderView($viewName = null, $includeLayout = true) {
        if (!$this->isViewRendered) {
            if ($viewName == null) {
                $viewName = $this->actionName;
            }
            $viewFileName = "views/" . $this->controllerName . "/" . $viewName . ".php";
            if ($includeLayout) {
                $headerFile = "views/layout/" . $this->layoutName . "/header.php";
                include_once($headerFile);
            }
            include_once($viewFileName);
            if ($includeLayout) {
                $footerFile = "views/layout/" . $this->layoutName . "/footer.php";
                include_once($footerFile);
            }
            $this->isViewRendered = true;
        }
    }

    public function redirectToUrl($url) {
        header("Location: " . $url);
        die;
    }

    public function redirect( $controllerName, $actionName = null, $params = null ) {
        $url = "/" . urlencode($controllerName);
        if ($actionName != null) {
            $url .= "/" . urlencode($actionName);
        }
        if ($params != null) {
            $encodedParams = array_map($params, "urlencode");
            $url .= implode("/", $encodedParams);
        }
        $this->redirectToUrl($url);
    }

    public function addMessage($msg, $type) {
        if (!isset($_SESSION["messages"])) {
            $_SESSION["messages"] = array();
        }
        array_push($_SESSION["messages"], array("text" => $msg, "type" => $type));
    }

    public function addInfoMessage($msg) {
        $this->addMessage($msg, "info");
    }

    public function addErrorMessage($msg) {
        $this->addMessage($msg, "error");
    }
}