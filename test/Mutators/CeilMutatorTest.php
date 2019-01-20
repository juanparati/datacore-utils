<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\CeilMutator;


/**
 * Class CeilMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class CeilMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = CeilMutator::class;


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
            'expected'  => 4
        ],
        [
            'type'      => 'float',
            'value'     => ' 13,1415.92',
            'expected'  => 13,
        ],
        [
            'type'      => 'float',
            'value'     => 'a44.11',
            'expected'  => 45,
        ],
        [
            'type'      => 'float',
            'value'     => ' 33.22a',
            'expected'  => 34,
        ],
        [
            'type'      => '_error',
            'value'     => 'aaa',
        ]
    ];

}