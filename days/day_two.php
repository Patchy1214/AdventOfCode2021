<?php

$file = file_get_contents("puzzle.txt");
$depths = explode("\n", $file);

depth_increase(tri_measurements($depths));

function tri_measurements($depths): array {
    return array_map(function ($values, $key) use ($depths) {
        return array_sum(array_slice($depths, $key, 3));
    }, $depths, array_keys($depths));
}

function depth_increase($depths) {
    $differences = array_filter($depths, function (int $value, $key) use ($depths): int {
        return !($key == 0) && $value > $depths[$key - 1];
    }, ARRAY_FILTER_USE_BOTH);
    echo count($differences);
}