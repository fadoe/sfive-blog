<?php
namespace Sfive\Filter;

use Zend\Filter\FilterInterface;

class ConvertToBoolean implements FilterInterface
{
    private static $booleans = array(
        'true' => true,
        'false' => false,
    );

    public function filter($value)
    {
        if (isset(self::$booleans[$value])) {
            return self::$booleans[$value];
        }

        return $value;
    }
}
