<?php
namespace Juanparati\DatacoreUtils\Tests\Mutators;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\UpperCaseMutator;


/**
 * Class UpperCaseMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class UpperCaseMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = UpperCaseMutator::class;


    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 123,
            'expected'  => '123'
        ],
        [
            'type'      => 'string',
            'value'     => 'åñï € í 😀',
            'expected'  => 'ÅÑÏ € Í 😀',
        ],
        [
            'type'      => 'string',
            'value'     => ' upper case',
            'expected'  => ' UPPER CASE',
        ],
    ];

}