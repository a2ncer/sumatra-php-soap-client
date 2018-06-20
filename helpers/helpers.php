<?php

function config(string $value = null)
{
    return App\Config::load(__DIR__.DIRECTORY_SEPARATOR.'../config/config.php')->get($value);
}
