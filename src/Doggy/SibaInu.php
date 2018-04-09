<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:09
 */

namespace Doggy;

use Doggy\Contracts\HuntingDoggyContract;

class SibaInu extends RealDoggy implements HuntingDoggyContract
{
    public function hunt(): string
    {
        return "I'm going to kill some ducks!";
    }
}