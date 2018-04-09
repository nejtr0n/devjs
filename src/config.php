<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 11:48
 */

use Doggy\Dachshund;
use Doggy\Mops;
use Doggy\PlushLabrador;
use Doggy\RubberDachshund;
use Doggy\SibaInu;

return [
    class_basename(Mops::class) => new Mops(),
    class_basename(SibaInu::class) => new SibaInu(),
    class_basename(Dachshund::class) => new Dachshund(),
    class_basename(PlushLabrador::class) => new PlushLabrador(),
    class_basename(RubberDachshund::class) => new RubberDachshund(),
];