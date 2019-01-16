<?php

namespace Juanparati\DatacoreUtils\Tests;

use Juanparati\DatacoreUtils\Exceptions\CasterException;
use PHPUnit\Framework\TestCase;


/**
 * Class CasterTest
 *
 * @package Juanparati\DatacoreUtils\Tests
 */
abstract class CasterTest extends TestCase
{

    /**
     * Values to test.
     *
     * @var array
     */
    public $test_values = [];


    /**
     * Caster class name.
     *
     * @var string
     */
    protected $caster;


    /**
     * Default test method.
     */
    public function test_caster()
    {
        // @var $caster \Juanparati\DatacoreUtils\Contracts\CasterContract
        $caster = new $this->caster;

        foreach ($this->test_values as $result)
        {

            if ($result['type'] === '_error')
            {
                $this->expectException(CasterException::class);
                $caster($result['value']);
            }
            else
            {
                $casted = $caster($result['value']);

                $this->assertInternalType($result['type'], $casted);
                $this->assertEquals($result['expected'], $casted);
            }
        }
    }
}