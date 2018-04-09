<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 12:38
 */

namespace Doggy;

class Dachshund extends RealDoggy
{
    public const SHAPOCKLYACK_MESS = "Mommy! Mommy!";

    /**
     * Вызываем старуху Шапокляк
     * @return string
     */
    public function callShapocklyack(): string
    {
        return self::SHAPOCKLYACK_MESS;
    }
}