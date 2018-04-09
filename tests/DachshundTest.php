<?php
/**
 * Created by PhpStorm.
 * User: a6y
 * Date: 09.04.18
 * Time: 13:24
 */

use Doggy\Dachshund;
use Doggy\RealDoggy;

class DachshundTest extends AbstractDoggyTest
{
    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();
        $this->doggy = $this->container->get(class_basename(Dachshund::class));
    }

    public function testBarkIsRight()
    {
        $this->assertEquals(RealDoggy::BARK_MESS, $this->doggy->bark());
    }

    public function testBarkIsWrong()
    {
        $this->assertNotEquals("Wrong bark", $this->doggy->bark());
    }

    public function testCallShapocklyackIsRight()
    {
        $this->assertEquals(Dachshund::SHAPOCKLYACK_MESS, $this->doggy->callShapocklyack());
    }

    public function testCallShapocklyackIsWrong()
    {
        $this->assertNotEquals("", $this->doggy->callShapocklyack());
    }
}