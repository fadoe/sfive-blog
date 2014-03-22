<?php
/**
 * Created by PhpStorm.
 * User: falk
 * Date: 21.03.14
 * Time: 21:55
 */

namespace SfiveTest;


class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testConvertDates()
    {
        $date = new \DateTime('03/21/2014');
        $this->assertEquals('2014-03-21', $date->format('Y-m-d'));

        $date = new \DateTime('21.03.2014');
        $this->assertEquals('2014-03-21', $date->format('Y-m-d'));
    }
}
