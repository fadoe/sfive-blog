<?php
namespace SfiveTest\Filter;

use Sfive\Filter\ConvertToBoolean;

class ConvertToBooleanTest extends \PHPUnit_Framework_TestCase
{
    private $booleanFilter;

    protected function setUp()
    {
        $this->booleanFilter = new ConvertToBoolean();
    }

    public function testConvertToTrue()
    {
        $this->assertTrue($this->booleanFilter->filter('true'));
    }

    public function testConvertToFalse()
    {
        $this->assertFalse($this->booleanFilter->filter('false'));
    }

    public function testDoNotConvertValue()
    {
        $var = 'wasanderes';
        $this->assertEquals($var, $this->booleanFilter->filter($var));
    }
}
