<?php

namespace Elyanor\ArrayManager\Tests\Helper;

use Elyanor\ArrayManager\Helper\ArrayHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class ArrayHelperTest
 * @package Elyanor\ArrayManager\Tests\Helper
 */
class ArrayHelperTest extends TestCase
{
    const ARRAY = [
        'first',
        'between',
        'last',
    ];

    public function testFirst()
    {
        $first = ArrayHelper::first(self::ARRAY);

        $this->assertEquals('first', $first);
        $this->assertNotEquals('last', $first);
    }

    public function testFirstKey()
    {
        $first = ArrayHelper::firstKey(self::ARRAY);

        $this->assertEquals(0, $first);
        $this->assertNotEquals(1, $first);
    }

    public function testLast()
    {
        $last = ArrayHelper::last(self::ARRAY);

        $this->assertEquals('last', $last);
        $this->assertNotEquals('first', $last);
    }

    public function testLastKey()
    {
        $last = ArrayHelper::lastKey(self::ARRAY);

        $this->assertEquals(2, $last);
        $this->assertNotEquals(1, $last);
    }
}
