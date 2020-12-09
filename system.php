<?php
    $env = Env::get();
    if ($env->debug !='true'){
        try {
            require_once 'controls/routes/routes.php';
            Route::not_found();
         } catch (Throwable $e) {
            require_once 'sys/errors/505.php';
         }
         error_reporting(0);
       
    }else{
        require_once 'controls/routes/routes.php';
        Route::not_found();
    }
   
    
    function __autoload($class_name){
        if(file_exists("../sys/classes/".$class_name.".php")){
            require_once "../sys/classes/".$class_name.".php";
        }else if(file_exists("../controls/controller/".$class_name.".php")){
            require_once "../controls/controller/".$class_name.".php";
        }
    }
 