<?php


namespace Sudoku;


use Model\Coordinate;

class Checker
{
    const VALID_INDEX = array(0, 1, 2, 3, 4, 5, 6, 7, 8);

    /**
     * @param $rowIndex
     * @param array $grid
     * @param $value
     * @return bool
     */
    public static function isRowValid(Coordinate $coordinate, array $grid, $value)
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
     * @param $columnIndex
     * @param array $grid
     * @param $value
     * @return bool
     */
    public static function isColumnValid(Coordinate $coordinate, array $grid, $value)
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
     * @param $rowIndex
     * @param $colIndex
     * @param array $grid
     * @param $value
     * @return bool
     */
    public static function isZoneValid(Coordinate $coordinate, array $grid, $value)
    {
        $rowIndex = $coordinate->getX();
        $colIndex = $coordinate->getY();
        $_i = $rowIndex-($rowIndex%3);
        $_j = $colIndex-($colIndex%3);
        for($i = $_i ; $i < $_i +3 ; $i++) {
            for ($j = $_j ; $j < $_j+3 ; $j++) {
                if ($grid[$i][$j] === $value) {
                    return false;
                }
            }
        }

        return true;
    }

    public static function check(Coordinate $coordinate, array $grid, $value)
    {
        return self::isRowValid($coordinate, $grid, $value) && self::isColumnValid($coordinate, $grid, $value) && self::isZoneValid($coordinate, $grid, $value);

    }

}