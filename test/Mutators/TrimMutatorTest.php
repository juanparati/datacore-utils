<?php
namespace Juanparati\DatacoreUtils\Tests\Mutators;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\TrimMutator;


/**
 * Class TrimMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class TrimMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = TrimMutator::class;


    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 123,
            'expected'  => '12',
            'params'    => ['3'],
        ],
        [
            'type'      => 'string',
            'value'     => '  Test  ',
            'expected'  => 'Test'
        ],
        [
            'type'      => 'string',
            'value'     => ' Test 2 a',
            'expected'  => ' Test 2 ',
            'params'    => ['a'],
        ],
    ];

}