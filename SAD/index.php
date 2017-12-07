<?php

require 'core/core.php';

if (isset($_GET['view'])) {
    if (file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')) {
        include 'core/controllers/' . strtolower($_GET['view']) . 'Controller.php';
    }
    else  if (file_exists('areas/' . strtolower($_GET['view']) . '.php')) { 
    	 include 'areas/'. strtolower($_GET['view']).'.php' ;
    }
    else  if (file_exists( strtolower($_GET['view']) .'/' . strtolower($_GET['view']) . '.php')) { 
         $web= strtolower($_GET['view']) . '/'. strtolower($_GET['view']).'.php' ;
         include $web;
    }
    else {
        include 'core/controllers/errorController.php';
    }

} else {
    include 'core/controllers/indexController.php';
}
