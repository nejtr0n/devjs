<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:03
 */

namespace Doggy;


abstract class ToyDoggy extends Doggy
{
    abstract public function getPrice(): int;
}