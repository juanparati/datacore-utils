<?php
namespace Juanparati\DatacoreUtils\Tests\Mutators;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\EvaluateMutator;


/**
 * Class EvaluateMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class EvaluateMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = EvaluateMutator::class;


    public $test_values =
    [
        [
            'type'      => 'int',
            'value'     => '2 + 2',
            'expected'  => 4
        ],
        [
            'type'      => 'float',
            'value'     => ' (2 + 2) ^ 2 + 0.1 * 1 / 2',
            'expected'  => 16.05
        ],
        [
            'type'      => '_error',
            'value'     => ' a + b',
        ],
    ];

}