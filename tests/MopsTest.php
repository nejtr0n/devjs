<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 13:24
 */

use Doggy\Mops;

class MopsTest extends AbstractDoggyTest
{
    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->doggy = $this->container->get(class_basename(Mops::class));
    }

    public function testBarkIsRight()
    {
        $this->assertEquals(Mops::BARK_MESS, $this->doggy->bark());
    }

    public function testBarkIsWrong()
    {
        $this->assertNotEquals("Wrong bark", $this->doggy->bark());
    }

    public function testDoNothingIsRight()
    {
        $this->assertEquals(Mops::NOTHING_MESS, $this->doggy->doNothing());
    }

    public function testDoNothingIsWrong()
    {
        $this->assertNotEquals("Wrong", $this->doggy->doNothing());
    }
}