<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');



function sortByDate($element1, $element2)
{
    $datetime1 = strtotime($element1['date']->format('Y-m-d'));
    $datetime2 = strtotime($element2['date']->format('Y-m-d'));
    return $datetime1 - $datetime2;
}


usort($articles, 'sortByDate');
