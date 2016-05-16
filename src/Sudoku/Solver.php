<?php


namespace Sudoku;


use Model\Coordinate;

class Solver
{
    use Display;
    const DISPLAY = true;
    const NOT_DISPLAY = false;

    /**
     * @param array $grid
     * @param bool $display
     * @return bool
     */
    public function resolve(array $grid, $display = self::DISPLAY)
    {
        // @codeCoverageIgnoreStart
        if ($display === self::DISPLAY) {
            echo "Before \n";
            $this->displayGrid($grid);
        }
        // @codeCoverageIgnoreEnd
        if ($this->tryToSolve($grid, 0)) {
            // @codeCoverageIgnoreStart
            if ($display === self::DISPLAY) {
                echo "After \n";
                $this->displayGrid($grid);
            }
            // @codeCoverageIgnoreEnd

            return true;
        } else {
            // @codeCoverageIgnoreStart
            echo "Error during resolving \n";
            if ($display === self::DISPLAY) {
                $this->displayGrid($grid);
            }
            // @codeCoverageIgnoreEnd

            return false;
        }
    }

    /**
     * @param array $grid
     * @param $position
     * @return bool
     */
    private final function tryToSolve(array &$grid, $position)
    {
        if ($position === (9*9)) {
            return true;
        }
        $i = intval($position/9);
        $j = intval($position%9);
        $coordinate = new Coordinate($i, $j);

        if ($grid[$i][$j] !== 0) {
            return $this->tryToSolve($grid, $position+1);
        }

        for($k = 1 ; $k <= 9 ; $k++) {
            if (Checker::check($coordinate, $grid, $k)) {
                $grid[$i][$j] = $k;
                if ($this->tryToSolve($grid, $position+1)) {
                    return true;
                }
            }
        }
        $grid[$i][$j] = 0;

        return false;
    }
}