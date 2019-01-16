<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\CasterTest;
use Juanparati\DatacoreUtils\Types\Casters\IntCaster;


/**
 * Class IntCasterTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Casters
 */
final class IntCasterTest extends CasterTest
{

    /**
     * Caster class name.
     *
     * @var string
     */
    protected $caster = IntCaster::class;


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
            'expected'  => 13
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
            'type'      => 'int',
            'value'     => '334 4',
            'expected'  => '333'
        ]
    ];

}