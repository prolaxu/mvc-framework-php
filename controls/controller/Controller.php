<?php
class Controller  
{
    public static function render($viewname,$arr){
        View::create($viewname,$arr);
    }
}


?>