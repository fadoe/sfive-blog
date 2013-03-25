<?php

namespace Sfive\Version;

final class Version
{

    const VERSION = '0.0.1-alpha1';

    const NAME = 'Sfive';

    public static function getCoreVersion($version)
    {
        return preg_replace('/^([0-9\.]+).*$/', '\1', $version);
    }

}
