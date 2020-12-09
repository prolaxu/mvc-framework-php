<?php
class Env 
{
    public static function get(){
        $file = fopen("../env.json", "r") or die("Unable to open file!");
        $data=fread($file,filesize("../env.json"));
        fclose($file);
        return json_decode($data);
    }
}
