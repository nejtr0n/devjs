<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:26
 */

namespace Doggy;

use Exception;

abstract class Doggy
{
    /**
     * @param $name
     * @param $arguments
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        throw new Exception("Sorry, this doggy can't do that!");
    }
}