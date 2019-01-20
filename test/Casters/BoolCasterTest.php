<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\CasterTest;
use Juanparati\DatacoreUtils\Types\Casters\BoolCaster;


/**
 * Class BoolCasterTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Casters
 */
final class BoolCasterTest extends CasterTest
{

    /**
     * Caster class name.
     *
     * @var string
     */
    protected $caster = BoolCaster::class;


    public $test_values =
    [
        [
            'type'      => 'bool',
            'value'     => 123,
            'expected'  => true
        ],
        [
            'type'      => 'bool',
            'value'     => 0,
            'expected'  => false
        ],
        [
            'type'      => 'bool',
            'value'     => true,
            'expected'  => true
        ],
        [
            'type'      => 'bool',
            'value'     => false,
            'expected'  => false
        ],
        [
            'type'      => 'bool',
            'value'     => '',
            'expected'  => false
        ]
    ];

}