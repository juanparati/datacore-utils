<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\CasterTest;
use Juanparati\DatacoreUtils\Types\Casters\FloatCaster;


/**
 * Class FloatCasterTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Casters
 */
final class FloatCasterTest extends CasterTest
{

    /**
     * Caster class name.
     *
     * @var string
     */
    protected $caster = FloatCaster::class;


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
            'type'      => '_error',
            'value'     => ' 13,1415.92',
        ],
        [
            'type'      => '_error',
            'value'     => 'a44',
        ],
        [
            'type'      => '_error',
            'value'     => '33a',
        ],
        [
            'type'      => '_error',
            'value'     => '334 4',
            'expected'  => '333'
        ]
    ];

}