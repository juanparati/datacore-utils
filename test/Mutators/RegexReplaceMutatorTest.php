<?php
namespace Juanparati\DatacoreUtils\Tests\Mutators;

use Juanparati\DatacoreUtils\Tests\MutatorTest;
use Juanparati\DatacoreUtils\Types\Mutator;
use Juanparati\DatacoreUtils\Types\Mutators\CapitalizeMutator;
use Juanparati\DatacoreUtils\Types\Mutators\RegexReplaceMutator;


/**
 * Class RegexReplaceMutatorTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Mutators
 */
final class RegexReplaceMutatorTest extends MutatorTest
{

    /**
     * Mutator class name.
     *
     * @var string
     */
    protected $mutator = RegexReplaceMutator::class;


    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 'Hello world',
            'expected'  => 'Hello Earth',
            'params'    => ['/(World)/i', 'Earth']
        ],
        [
            'type'      => 'string',
            'value'     => 'Hello world',
            'expected'  => 'Hello world',
            'params'    => ['/(planet)/', 'Earth']
        ],
    ];


    /**
     * Test singleton
     */
    public function test_singleton()
    {
        $mutated = Mutator::mutate(
            'regex_replace',
            $this->test_values[0]['value'],
            $this->test_values[0]['params'][0],
            $this->test_values[0]['params'][1]
        );

        $this->assertEquals($this->test_values[0]['expected'], $mutated);

        $mutated = Mutator::mutate(
            'regex_replace',
            $this->test_values[0]['value'],
            $this->test_values[0]['params']
        );

        $this->assertEquals($this->test_values[0]['expected'], $mutated);

    }

}