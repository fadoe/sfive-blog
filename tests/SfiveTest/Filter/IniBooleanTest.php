<?php

namespace SfiveTest\Filter;

use Zend\Filter\FilterChain;

use Sfive\Filter\IniBoolean;

use \PHPUnit_Framework_TestCase as TestCase;

class IniBooleanTest extends TestCase
{

    public function testFilterIniValuesToBoolean()
    {
        $filter = new IniBoolean();
        $this->assertInstanceOf('\Zend\Filter\FilterInterface', $filter);

        $filterChain = new FilterChain();
        $filterChain->attach($filter);

        $this->assertTrue($filterChain->filter('on'));
        $this->assertTrue($filterChain->filter('On'));
        $this->assertTrue($filterChain->filter('1'));
        $this->assertTrue($filterChain->filter(1));
        $this->assertFalse($filterChain->filter('Off'));
        $this->assertFalse($filterChain->filter('off'));
        $this->assertFalse($filterChain->filter('0'));
        $this->assertFalse($filterChain->filter(0));
        $this->assertFalse($filterChain->filter('aasdfsdf'));
    }

}
