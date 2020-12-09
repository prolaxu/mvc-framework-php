<?php
Route::set('/about-us',function(){
    echo "About Us !";
});
Route::set('/',function(){
    //echo $_GET['url'];
    IndexC::index();
});
