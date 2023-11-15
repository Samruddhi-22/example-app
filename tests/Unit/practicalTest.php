<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use SebastianBergmann\Type\VoidType;

require(__DIR__.'/../../practicals/practical.php');
use practicals\practical;

class practicalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(\Practical::add(1,3), 4);
    }

    public function testAddNumberic(): void
    {
       $this->expectException(\InvalidArgumentException::class);
       \Practical::add("abc","xyz");
    }

   
}
?>





    

