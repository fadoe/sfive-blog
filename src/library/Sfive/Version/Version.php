<?php

namespace Sfive\Version;

final class Version
{
    const NAME = 'Sfive';
    const VERSION = '0.3.0';

    public static function getCoreVersion($version)
    {
        return preg_replace('/^([0-9\.]+).*$/', '\1', $version);
    }

    public static function compareVersion($version)
    {
        $version = strtolower($version);
        $version = preg_replace('/(\d)pr(\d?)/', '$1a$2', $version);

        return version_compare($version, strtolower(self::VERSION));
    }
}
