<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2015 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

class Point2
{
    private static $pointCount = 0;

    public $x;
    public $y;

    public static function getPointCount()
    {
        return self::$pointCount;
    }

    public function __construct($x = 0, $y = 0)
    {
//      echo "Inside " . __METHOD__ . "\n";
        
        $this->x = $x;
        $this->y = $y;
        ++self::$pointCount;
    }

    public function __destruct()
    {
        --self::$pointCount;

        echo "Inside " . __METHOD__ . ", pointCount now " . $this->getPointCount() . "\n";
    }

    public function __clone()
    {
        ++self::$pointCount;

        echo "Inside " . __METHOD__ . ", point count = " . self::$pointCount . "\n";
    }

    public function __toString()
    {
        return '(' . $this->x . ',' . $this->y . ')';
    }   
}
