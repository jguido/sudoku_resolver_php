<?php

namespace Tests;

use Model\Coordinate;
use Sudoku\Checker;
use Sudoku\Solver;
use Tests\Tools\Builder;

class GameTest extends \PHPUnit_Framework_TestCase
{
    use Builder;

    public function testAValueIsValidInGrid()
    {
        self::assertTrue(Checker::check(new Coordinate(0, 0), self::generateMediumGrid(), 1));
    }

    public function testAValueIsNotValidInValidGrid()
    {
        self::assertFalse(Checker::check(new Coordinate(0, 0), self::generateMediumGrid(), 2));
    }

    public function testAValueIsNotValidInGrid()
    {
        self::assertFalse(Checker::check(new Coordinate(1, 1), self::generateBadGrid(), 1));
    }

    public function testResolveEasy()
    {
        $start = microtime(true);
        $solver = new Solver();
        self::assertTrue($solver->resolve(self::generateEasyGrid(), false));
        $end = microtime(true);

        echo "\nSudoku(Easy) solved in : ".(round(($end-$start)*1000, 2))." ms \n";
    }

    public function testResolveMedium()
    {
        $start = microtime(true);
        $solver = new Solver();
        self::assertTrue($solver->resolve(self::generateMediumGrid(), false));
        $end = microtime(true);

        echo "\nSudoku(Medium) solved in : ".(round(($end-$start)*1000, 2))." ms \n";
    }

    public function testResolveHard()
    {
        $start = microtime(true);
        $solver = new Solver();
        self::assertTrue($solver->resolve(self::generateHardGrid(), false));
        $end = microtime(true);

        echo "\nSudoku(Hard) solved in : ".(round(($end-$start)*1000, 2))." ms \n";
    }

    public function testResolveDiabolical()
    {
        $start = microtime(true);
        $solver = new Solver();
        self::assertTrue($solver->resolve(self::generateDiabolicalGrid(), false));
        $end = microtime(true);

        echo "\nSudoku(Diabolical) solved in : ".(round(($end-$start)*1000, 2))." ms \n";
    }

    public function testResolveUnresolvable()
    {
        $start = microtime(true);
        $solver = new Solver();
        self::assertFalse($solver->resolve(self::generateNotResolvableGrid(), false));
        $end = microtime(true);

        echo "\nSudoku(Not resolvable) not solved in : ".(round(($end-$start)*1000, 2))." ms \n";
    }

}