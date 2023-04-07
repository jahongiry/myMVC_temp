<?php 
  class Core {
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];

    public function __construct(){
      $url = $this->getUrl();
      //Search controller from the first value
      if(file_exists('../app/controllers/' . ucwords($url[0] . ".php"))){
          //If this exists set controller
          $this->currentController = ucwords($url[0]);
          //Unset 0 Index
          unset($url[0]);
      }

      //Require controller
      require_once '../app/controllers/' . $this->currentController . ".php";

      //Instantiate controller class
      $this->currentController = new $this->currentController;

      //Check for the second part of the url

    }

    public function getUrl(){
      if(isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }
  }