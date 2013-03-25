<?php

namespace SfiveTest\Version;

use PHPUnit_Framework_TestCase as TestCase;
use Sfive\Version\Version;

class VersionTest extends TestCase
{

    public function testGetCoreVersion()
    {

        $this->assertEquals('0.0.1', Version::getCoreVersion('0.0.1-pre1'));
        $this->assertEquals('2.0.0', Version::getCoreVersion('2.0.0-pre1'));
        $this->assertEquals('12.0.1', Version::getCoreVersion('12.0.1-alpha23'));
        $this->assertEquals('2', Version::getCoreVersion('2-pre12'));
        $this->assertEquals('12.3', Version::getCoreVersion('12.3-beta2'));
    }

}
