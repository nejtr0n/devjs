<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 13:33
 */

use PHPUnit\Framework\TestCase;

abstract class AbstractDoggyTest extends TestCase
{
    /**
     * @var \DI\Container
     */
    protected $container;
    /**
     * @var \Doggy\Doggy
     */
    protected $doggy;

    public function setUp()
    {
        parent::setUp();
        $this->container = require __DIR__ . '/../src/bootstrap.php';
    }

    public function testWrongDoggyMethod()
    {
        $this->expectException(Exception::class);
        $this->doggy->doNotExists();
    }
}