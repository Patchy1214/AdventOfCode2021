<?php

$file = file_get_contents("puzzles/day_2_puzzle.txt");
$directions = explode("\n", $file);

$position = get_positions($directions);

function get_positions($directions) {
    $position = [0, 0]; //[0] - Horizontal Position, [1] - Depth
    foreach ($directions as $direction) {
        $data = explode(" ", $direction);
        if ($data[0] == "forward") {
            $position[0] += (int) $data[1];
        } else if ($data[0] == "down") {
            $position[1] += (int) $data[1];
        } else if ($data[0] == "up") {
            $position[1] -= (int) $data[1];
        }
    }
    return $position[0] * $position[1];
}