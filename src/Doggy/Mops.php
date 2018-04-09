<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 11:43
 */

namespace Doggy;

use Doggy\Contracts\LazyDoggyContract;
use Doggy\Contracts\PeepDoggyContract;
use Doggy\Traits\PeepTrait;

class Mops extends RealDoggy implements LazyDoggyContract, PeepDoggyContract
{
    use PeepTrait;

    public const BARK_MESS = "weef! weef!";
    public const NOTHING_MESS = "I'm too lazy to do something!";

    public function doNothing(): string
    {
        return self::NOTHING_MESS;
    }
}