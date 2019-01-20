<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\IntMutator;


/**
 * Class IntMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class IntMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = IntMutator::class;


    public $test_values =
    [
        [
            'type'      => 'int',
            'value'     => 123,
            'expected'  => 123
        ],
        [
            'type'      => 'int',
            'value'     => 3.141592,
            'expected'  => 3
        ],
        [
            'type'      => 'int',
            'value'     => ' 13,1415.92',
            'expected'  => 13,
        ],
        [
            'type'      => 'int',
            'value'     => 'a44.11',
            'expected'  => 44,
        ],
        [
            'type'      => 'int',
            'value'     => ' 33.22a',
            'expected'  => 33,
        ],
        [
            'type'      => '_error',
            'value'     => 'aaa',
        ]
    ];

}