<?php
/*

This task is to take an array of associative arrays and return a string containing an ASCII table.

Example input:

[
    [
        'Name' => 'Sam',
        'Colour' => 'Blue',
        'Animal' => 'Cat',
        'Number' => 42
    ],
    [
        'Colour' => 'Green',
        'Animal' => 'Blue Whale',
        'Number' => 17.7,
        'Name' => 'Jason'
    ],
    [
        'Name' => 'Adam',
        'Number' => -1,
        'Animal' => 'Egyptian Ibis',
        'Colour' => 'Red'
    ]
]

Example output:

|-----------------------------------------|
| Name  | Colour | Animal        | Number |
|-------+--------+---------------+--------|
| Sam   | Blue   | Cat           | 42     |
| Jason | Green  | Blue Whale    | 17.7   |
| Adam  | Red    | Egyptian Ibis | -1     |
|-----------------------------------------|

Specifications:

- Column order is determined by the first entry in the input.
- Each cell must have one space padding before the text and at least one space padding after the text.
- The width of each column is determined by the length of the longest string in each column plus required padding.
- All cells should be left aligned.
- You may optionally include an extra linebreak before or after the table.

Assumptions:

- The $data variable will have at least one entry.
- Each entry will have the same columns (but they may not be in the same order in the input)

*/

function getAsciiTable(array $data): string
{
    $output = '';

    // What's listed below is a suggested method of solving this task. You are not required to follow it.

    // Determine the width of each column
    // $widths = [];
    // ...

    // Top border
    // $output .= '...';

    // Header row
    // $output .= '...';

    // Border between header and data
    // $output .= '...';

    // Rows
    // $output .= '...';

    // Bottom border
    // $output .= '...';

    return $output;
}
