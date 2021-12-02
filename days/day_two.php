<?php

$file = file_get_contents("puzzle.txt");
$depths = explode("\n", $file);
depth_increase($depths);

function depth_increase($depths) {
    $differences = array_filter($depths, function (int $value, $key) use ($depths): int {
        return !($key == 0) && $value > $depths[$key - 1];
    }, ARRAY_FILTER_USE_BOTH);
    echo count($differences);
}