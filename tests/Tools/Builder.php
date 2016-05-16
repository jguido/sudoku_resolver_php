<?php


namespace Tests\Tools;


trait Builder
{
    static function generateEasyGrid()
    {
        return array(
            array(0, 0, 0, 4, 8, 2, 0, 6, 1),
            array(8, 3, 0, 0, 7, 0, 4, 0, 0),
            array(0, 4, 0, 0, 0, 1, 0, 0, 0),
            array(9, 0, 0, 0, 4, 5, 0, 3, 6),
            array(5, 6, 0, 0, 0, 0, 0, 8, 4),
            array(2, 8, 0, 6, 3, 0, 0, 0, 7),
            array(0, 0, 0, 1, 0, 0, 0, 5, 0),
            array(0, 0, 8, 0, 2, 0, 0, 4, 9),
            array(4, 7, 0, 9, 5, 8, 0, 0, 0)
        );
    }

    static function generateMediumGrid()
    {
        return array(
            array(0, 0, 0, 0, 0, 0, 0, 6, 0),
            array(0, 4, 3, 8, 0, 0, 0, 2, 0),
            array(2, 0, 0, 7, 4, 0, 0, 0, 3),
            array(7, 9, 8, 0, 1, 0, 0, 0, 0),
            array(5, 2, 0, 0, 8, 0, 0, 7, 4),
            array(0, 0, 0, 0, 2, 0, 6, 9, 8),
            array(3, 0, 0, 0, 7, 8, 0, 0, 2),
            array(0, 1, 0, 0, 0, 2, 7, 5, 0),
            array(0, 7, 0, 0, 0, 0, 0, 0, 0)
        );
    }

    static function generateHardGrid()
    {
        return array(
            array(0, 0, 8, 6, 0, 0, 1, 0, 0),
            array(0, 0, 6, 0, 0, 5, 9, 0, 0),
            array(0, 0, 0, 0, 8, 2, 0, 4, 0),
            array(0, 0, 0, 0, 0, 0, 0, 9, 0),
            array(0, 3, 0, 5, 4, 8, 0, 2, 0),
            array(0, 4, 0, 0, 0, 0, 0, 0, 0),
            array(0, 2, 0, 1, 3, 0, 0, 0, 0),
            array(0, 0, 1, 8, 0, 0, 2, 0, 0),
            array(0, 0, 9, 0, 0, 7, 8, 0, 0)
        );
    }

    static function generateDiabolicalGrid()
    {
        return array(
            array(0, 9, 0, 0, 0, 0, 0, 0, 0),
            array(0, 6, 0, 9, 0, 0, 4, 8, 2),
            array(0, 0, 0, 4, 0, 0, 6, 9, 0),
            array(0, 0, 0, 6, 4, 0, 0, 0, 3),
            array(0, 0, 1, 0, 0, 0, 8, 0, 0),
            array(3, 0, 0, 0, 9, 5, 0, 0, 0),
            array(0, 2, 3, 0, 0, 7, 0, 0, 0),
            array(7, 1, 8, 0, 0, 9, 0, 5, 0),
            array(0, 0, 0, 0, 0, 0, 0, 2, 0)
        );
    }

    static function generateNotResolvableGrid()
    {
        return array(
            array(0, 8, 0, 0, 0, 0, 1, 0, 0),
            array(1, 5, 0, 9, 0, 0, 4, 8, 2),
            array(0, 0, 2, 4, 0, 0, 6, 9, 0),
            array(0, 0, 0, 6, 4, 0, 0, 0, 3),
            array(0, 0, 1, 0, 0, 0, 8, 0, 0),
            array(3, 0, 0, 0, 9, 5, 0, 0, 0),
            array(0, 2, 3, 0, 0, 7, 9, 0, 0),
            array(7, 1, 8, 0, 0, 9, 0, 5, 0),
            array(0, 0, 0, 0, 0, 0, 0, 2, 0)
        );
    }




    static function generateBadGrid()
    {
        return array(
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1),
            array(1, 1, 1, 1, 1, 1, 1, 1, 1)
        );
    }

}