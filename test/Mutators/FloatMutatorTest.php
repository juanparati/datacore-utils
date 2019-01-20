<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\FloatMutator;


/**
 * Class FloatMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class FloatMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = FloatMutator::class;


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
            'expected'  => 3.141592
        ],
        [
            'type'      => 'float',
            'value'     => ' 13,1415.92',
            'expected'  => 13,
        ],
        [
            'type'      => 'float',
            'value'     => 'a44.11',
            'expected'  => 44.11,
        ],
        [
            'type'      => 'float',
            'value'     => ' 33.22a',
            'expected'  => 33.22,
        ],
        [
            'type'      => '_error',
            'value'     => 'aaa',
        ]
    ];

}