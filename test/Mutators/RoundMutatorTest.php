<?php
namespace Juanparati\DatacoreUtils\Tests\Mutators;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\RoundMutator;


/**
 * Class RoundMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class RoundMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = RoundMutator::class;


    public $test_values =
    [
        [
            'type'      => 'float',
            'value'     => 123,
            'expected'  => 123
        ],
        [
            'type'      => 'float',
            'value'     => 3.141592,
            'expected'  => 3,
            'params'    => [0]
        ],
        [
            'type'      => 'float',
            'value'     => '10.99',
            'expected'  => 11,
        ],
        [
            'type'      => 'float',
            'value'     => 1.0012,
            'expected'  => 1.0,
            'params'    => [1, 'half_down']
        ],
    ];

}