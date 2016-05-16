<?php


namespace Sudoku;


trait Display
{
    /**
     * @param $grid
     * @codeCoverageIgnore
     */
    private function displayGrid($grid)
    {
        echo "-------------\n";
        for ($i = 0 ; $i < 9 ; $i++) {
            for($j = 0 ; $j < 9 ; $j++) {
                if ($j === 0) {
                    echo "|";
                }elseif ($j%3 === 0) {
                    echo "|";
                }
                echo $grid[$i][$j];
                if ($j === 8) {
                    echo "|";
                }
            }
            echo "\n";
            if ((($i+1)%3) === 0) {
                echo "-------------\n";
            }
        }
        echo "\n\n";
    }
}