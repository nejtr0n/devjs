<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 14:13
 */

use Doggy\RealDoggy;
use Doggy\SibaInu;

class SibaInuTest extends AbstractDoggyTest
{
    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->doggy = $this->container->get(class_basename(SibaInu::class));
    }

    public function testBarkIsRight()
    {
        $this->assertEquals(RealDoggy::BARK_MESS, $this->doggy->bark());
    }

    public function testBarkIsWrong()
    {
        $this->assertNotEquals("Wrong bark", $this->doggy->bark());
    }

    public function testHuntIsRight()
    {
        $this->assertEquals("I'm going to kill some ducks!", $this->doggy->hunt());
    }

    public function testHuntIsWrong()
    {
        $this->assertNotEquals("Wrong hunt", $this->doggy->hunt());
    }
}