<?php
class View 
{
    public static function create($viewname,$arr){
        echo self::template()->render($viewname.'.view.php',$arr);
    }
    public static function template(){
        require_once '../vendor/autoload.php';
        $loader = new \Twig\Loader\FilesystemLoader('../view/');
        $twig = new \Twig\Environment($loader);
        return $twig;
    }
}
