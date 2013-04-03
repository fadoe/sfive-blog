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

    public function testCompareVersion()
    {
        $expect = -1;
        for ($i = 0; $i < 2; $i++) {
            for ($j = 0; $j < 12; $j++) {
                for ($k = 0; $k < 20; $k++) {
                    foreach (array('dev', 'pr', 'PR', 'alpha', 'a1', 'a2', 'beta', 'b1', 'b2', 'RC', 'RC1', 'RC2', 'RC3', '', 'pl1', 'PL1') as $rel) {
                        $ver = "$i.$j.$k$rel";
                        $normalizedVersion = strtolower(Version::VERSION);
                        if (strtolower($ver) === $normalizedVersion
                            || strtolower("$i.$j.$k-$rel") === $normalizedVersion
                            || strtolower("$i.$j.$k.$rel") === $normalizedVersion
                            || strtolower("$i.$j.$k $rel") === $normalizedVersion
                        ) {
                            if ($expect == -1) {
                                $expect = 1;
                            }
                        } else {
                            $this->assertSame(
                                Version::compareVersion($ver),
                                $expect,
                                "For version '$ver' and Sfive\Version::VERSION = '"
                                . Version::VERSION . "': result=" . (Version::compareVersion($ver))
                                . ', but expected ' . $expect
                            );
                        }
                    }
                }
            }
        }
    }

}
