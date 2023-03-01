<?php
include 'Calculator.php';

use PHPUnit\Framework\Testcase;

class CalculatorTest extends Testcase
{
    // private $calculator;
    public function testAddNumber()
    {
        $c1 = new Calculator();
        $this->assertEquals(10,$c1->addNumber(5,5));
        $this->assertEquals(0,$c1->addNumber(5,5));
        // $this->testAddNumber(5, 5);
    }


    // จิค
    // ศาตร์
    // จิตวิญ
    // กฎหมาย

}
?>