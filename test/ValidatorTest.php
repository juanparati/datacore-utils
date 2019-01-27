<?php

namespace Juanparati\DatacoreUtils\Tests;

use Juanparati\DatacoreUtils\Exceptions\ValidatorException;
use PHPUnit\Framework\TestCase;


/**
 * Class ValidatorTest
 *
 * @package Juanparati\DatacoreUtils\Tests
 */
abstract class ValidatorTest extends TestCase
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
    protected $validator;


    /**
     * Default test method.
     */
    public function test_validator()
    {
        // @var $validator \Juanparati\DatacoreUtils\Contracts\ValidatorContract
        $validator = new $this->validator;

        foreach ($this->test_values as $result)
        {

            if ($result['type'] === '_error')
            {
                $this->expectException(ValidatorException::class);
                $validator($result['value']);
            }
            else
            {
                $validated = $validator($result['value'], $result['params'] ?? null);

                $this->assertEquals($result['expected'], $validated);
            }
        }
    }
}