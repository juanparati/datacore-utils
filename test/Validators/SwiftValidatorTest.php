<?php

namespace Juanparati\DatacoreUtils\Tests\Validators;


use Juanparati\DatacoreUtils\Tests\ValidatorTest;
use Juanparati\DatacoreUtils\Types\Validator;
use Juanparati\DatacoreUtils\Types\Validators\SwiftValidator;


/**
 * Class SwiftValidatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Validators
 */
final class SwiftValidatorTest extends ValidatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $validator = SwiftValidator::class;


    /**
     * @see https://www.theswiftcodes.com/
     *
     * @var array
     */
    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 'CAGLESMMBAC',
            'expected'  => true,
        ],
        [
            'type'      => 'string',
            'value'     => 'FAKE',
            'expected'  => false,
        ],
    ];


    /**
     * Test singleton
     */
    public function test_singleton()
    {
        $this->assertTrue(Validator::validate('swift', $this->test_values[0]['value']));
    }

}