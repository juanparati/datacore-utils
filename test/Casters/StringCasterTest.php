<?php
namespace Juanparati\DatacoreUtils\Tests\Casters;

use Juanparati\DatacoreUtils\Tests\CasterTest;
use Juanparati\DatacoreUtils\Types\Casters\StringCaster;


/**
 * Class StringCasterTest.
 *
 * @package Juanparati\DatacoreUtils\Tests\Casters
 */
final class StringCasterTest extends CasterTest
{

    /**
     * Caster class name.
     *
     * @var string
     */
    protected $caster = StringCaster::class;


    public $test_values =
    [
        [
            'type'      => 'string',
            'value'     => 123,
            'expected'  => '123'
        ],
        [
            'type'      => 'string',
            'value'     => 3.141592,
            'expected'  => '3.141592'
        ],
        [
            'type'      => 'string',
            'value'     => ' 13,1415.92',
            'expected'  => ' 13,1415.92'
        ],
        [
            'type'      => '_error',
            'value'     => [],
        ],
    ];

}