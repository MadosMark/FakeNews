<?php

$articles = [
    ['name' => 'Ally Sheedy ', 'year' => 1962],
    ['name' => 'Anthony Michael Hall', 'year' => 1968],
    ['name' => 'Emilio Estevez', 'year' => 1962],
    ['name' => 'Judd Nelson', 'year' => 1959],
    ['name' => 'Molly Ringwald', 'year' => 1968],
];

foreach ($articles as $article) {
    echo $article['name'] . "\n"; // <br> instead of \n if you're running in the browser

    // if ($actor['year'] === 1968) {
    //     break;
    // }
}
