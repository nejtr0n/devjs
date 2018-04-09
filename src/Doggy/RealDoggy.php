<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:00
 */

namespace Doggy;


abstract class RealDoggy extends Doggy
{
    public const BARK_MESS = "woof! woof!";

    public function bark(): string
    {
        return static::BARK_MESS;
    }
}