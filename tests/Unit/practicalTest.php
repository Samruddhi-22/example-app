<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

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
}
