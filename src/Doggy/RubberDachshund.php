<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:05
 */

namespace Doggy;

use Doggy\Contracts\PeepDoggyContract;
use Doggy\Traits\PeepTrait;

class RubberDachshund extends ToyDoggy implements PeepDoggyContract
{
    use PeepTrait;

    public function getPrice(): int
    {
        return 100;
    }
}