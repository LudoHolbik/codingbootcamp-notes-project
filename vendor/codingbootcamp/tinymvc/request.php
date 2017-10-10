<?php

namespace codingbootcamp\tinymvc;


//$_REQUEST provide us all data stored in $_GET and $_POST
class request {


    // easy way to access and retreive information from request
    //by using this function
    public static function get($name, $default = null){
    if(isset($_REQUEST[$name]))
    {
        echo $_REQUEST[$name]; // echo or whatever way we use it
    }
    else
    {
        return $default; // null or whatever the value should be if the key is not found
    }
    }
}