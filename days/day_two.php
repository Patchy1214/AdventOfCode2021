<?php

$file = file_get_contents("puzzles/day_2_puzzle.txt");
$directions = explode("\n", $file);

echo "Position: " . get_positions($directions);

function get_positions($directions) {
    $position = ['horizontal' => 0, 'depth' => 0, 'aim' => 0];
    foreach ($directions as $direction) {
        $data = explode(" ", $direction);
        if ($data[0] == "forward") {
            $position['horizontal'] += (int) $data[1];
            $position['depth'] += $data[1] * $position['aim'];
        } else if ($data[0] == "down") {
            $position['aim'] += (int) $data[1];
        } else if ($data[0] == "up") {
            $position['aim'] -= (int) $data[1];
        }
    }
    return $position['horizontal'] * $position['depth'];
}