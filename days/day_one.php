<?php

depth_increase();

function depth_increase() {
    $file = file_get_contents("day_1_input.txt");
    $depths = explode("\n", $file);
    $differences = array_filter($depths, function (int $value, $key) use ($depths): int {
        return !($key == 0) && $value > $depths[$key - 1];
    }, ARRAY_FILTER_USE_BOTH);
    echo count($differences);
}
