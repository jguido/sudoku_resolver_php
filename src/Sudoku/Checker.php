<?php


namespace Sudoku;


use Model\Coordinate;

class Checker
{
    /**
     * @param Coordinate $coordinate
     * @param array $grid
     * @param $value
     * @return bool
     */
    private static function isRowValid(Coordinate $coordinate, array $grid, $value)
    {
        $rowIndex = $coordinate->getX();
        for($j = 0 ; $j < 9 ; $j++) {
            if ($grid[$rowIndex][$j] === $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param Coordinate $coordinate
     * @param array $grid
     * @param $value
     * @return bool
     */
    private static function isColumnValid(Coordinate $coordinate, array $grid, $value)
    {
        $columnIndex = $coordinate->getY();
        for($i = 0 ; $i < 9 ; $i++) {
            if ($grid[$i][$columnIndex] === $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param Coordinate $coordinate
     * @param array $grid
     * @param $value
     * @return bool
     */
    private static function isZoneValid(Coordinate $coordinate, array $grid, $value)
    {
        $_i = $coordinate->getX()-($coordinate->getX()%3);
        $_j = $coordinate->getY()-($coordinate->getY()%3);
        for($i = $_i ; $i < $_i +3 ; $i++) {
            for ($j = $_j ; $j < $_j+3 ; $j++) {
                if ($grid[$i][$j] === $value) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * @param Coordinate $coordinate
     * @param array $grid
     * @param $value
     * @return bool
     */
    public static function check(Coordinate $coordinate, array $grid, $value)
    {
        return self::isRowValid($coordinate, $grid, $value) && self::isColumnValid($coordinate, $grid, $value) && self::isZoneValid($coordinate, $grid, $value);

    }

}