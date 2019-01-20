<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\CapitalizeMutator;


/**
 * Class CapitalizeMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class CapitalizeMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = CapitalizeMutator::class;


    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 123,
            'expected'  => '123'
        ],
        [
            'type'      => 'string',
            'value'     => 'one two three',
            'expected'  => 'One Two Three'
        ],
        [
            'type'      => 'string',
            'value'     => 'århus ñato',
            'expected'  => 'Århus Ñato',
        ],
        [
            'type'      => 'string',
            'value'     => 'First',
            'expected'  => 'First',
        ],
    ];

}