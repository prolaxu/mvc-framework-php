<?php

class Route{
    public static $validRoutes =array();
    public static function set($route,$function){
        $url='/'.@$_GET['url'];
        if($route{0}!='/'){
            $route= '/'.$route;
        }
        self::$validRoutes[]=$route;
        if($url==$route){
            $function->__invoke();
        }
    }

    public static function not_found(){
        $url='/'.@$_GET['url'];
        if(!in_array($url,self::$validRoutes)){
            require_once __DIR__.'/../errors/404.php';
        }
    }
}