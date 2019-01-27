<?php
namespace Juanparati\DatacoreUtils\Tests\Mutators;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutators\LowerCaseMutator;


/**
 * Class LowerCaseMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class LowerCaseMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = LowerCaseMutator::class;


    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 123,
            'expected'  => '123'
        ],
        [
            'type'      => 'string',
            'value'     => 'ÅÑÏ € Í 😀',
            'expected'  => 'åñï € í 😀'
        ],
        [
            'type'      => 'string',
            'value'     => ' UPPER CASE',
            'expected'  => ' upper case',
        ],
    ];

}