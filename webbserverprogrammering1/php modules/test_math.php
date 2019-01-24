<?php
/**
 * Created by PhpStorm.
 * User: Administratör
 * Date: 2019-01-24
 * Time: 15:15
 * Test class for math.php
 *
 */

use PHPUnit\Framework\TestCase;
require ('math.php');

class test_math extends TestCase
{
    public function testAddition() {
        $this->assertEquals(10, addition(5,5));
        $this->assertEquals(-20, addition(-40,20));
        $this->assertEquals(9, addition(4.5,4.5));
        $this->assertEquals(5.5, addition(2,3.5));
        $this->assertEquals(9058, addition(2524,6534));
    }
    public function testSubtraction() {
        $this->assertEquals(40, subtraction(80,40));
        $this->assertEquals(-20, subtraction(20,40));
        $this->assertEquals(20.5, subtraction(30,9.5));
        $this->assertEquals(300, subtraction(1043,743));
        $this->assertEquals(-20, subtraction(-50,-30));
    }
    public function testMultiplication() {
        $this->assertEquals(27, multiplication(3,9));
        $this->assertEquals(-20, multiplication(-10,2));
        $this->assertEquals(9, multiplication(4.5,2));
        $this->assertEquals(4.5, multiplication(2.25,2));
        $this->assertEquals(27664956, multiplication(4234,6534));
    }
    public function testDivide() {
        $this->assertEquals(5, division(10,2));
        $this->assertEquals(-25, division(-50,2));
        $this->assertEquals(1, division(4.5,4.5));
        $this->assertEquals(4.5, division(20.25, 4.5));
        $this->assertEquals(25, division(100,4));
    }
}
