<?php
  require_once  "config/config.php";

  //AUTO load libraires
    spl_autoload_register(function ($className){
        require_once "libraries/" . $className . ".php";
    });


