<?php
class IndexC extends Controller{

    public static function index(){
       self::render('index',['name' => 'Open MVC', 'version' => '1.0']);
    }
}
?>