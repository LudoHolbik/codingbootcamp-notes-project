<?php


//alias for \codingbootcamp\tinymvc\request::get - it will do the same thing, but accesible from everywhere

function request ($name, $default = null)
{
    return \codingbootcamp\tinymvc\request::get($name, $default);
}
