<?php

namespace Tests;


use App\Problem;
use PHPUnit\Framework\TestCase;


class ProblemTest extends TestCase
{
    /** @var Problem */
    private $solution;

    public static function setUpBeforeClass()
    {

    }

    public function setUp()
    {
        $this->solution = new Problem();
    }

    public function tearDown()
    {

    }

    public static function tearDownAfterClass()
    {

    }

    /**
     * @dataProvider powerDigitSumDataProvider
     */
    public function testPowerDigitSum($power, $expectedResult)
    {
        $actualSum = $this->solution->getPowerDigitSum($power);
        $this->assertEquals($expectedResult, $actualSum);
    }

    public function powerDigitSumDataProvider()
    {
        return [
            [   'power'  => 15,
                'result' => 26
            ],
            [   'power'  => 1000,
                'result' => 1366
            ],

        ];
    }

}
