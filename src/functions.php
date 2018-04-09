<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:29
 */

if (!function_exists("camelize")) {
    function camelize($input, $separator = '_')
    {
        return str_replace($separator, '', ucwords($input, $separator));
    }
}

if (!function_exists("class_basename")) {
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}
