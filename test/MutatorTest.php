<?php

namespace Juanparati\DatacoreUtils\Tests;

use Juanparati\DatacoreUtils\Exceptions\MutatorException;
use PHPUnit\Framework\TestCase;


/**
 * Class MutatorTest
 *
 * @package Juanparati\DatacoreUtils\Tests
 */
abstract class MutatorTest extends TestCase
{

    /**
     * Values to test.
     *
     * @var array
     */
    public $test_values = [];


    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator;


    /**
     * Default test method.
     */
    public function test_mutator()
    {
        // @var $caster \Juanparati\DatacoreUtils\Contracts\MutatorContract
        $mutator = new $this->mutator;

        foreach ($this->test_values as $result)
        {

            if ($result['type'] === '_error')
            {
                $this->expectException(MutatorException::class);
                $mutator($result['value']);
            }
            else
            {
                $mutated = $mutator($result['value'], $result['params'] ?? null);

                $this->assertInternalType($result['type'], $mutated);
                $this->assertEquals($result['expected'], $mutated);
            }
        }
    }
}