<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/AsciiTable.php';

class AsciiTableTest extends TestCase
{
    /**
     * Checks that PHPUnit is working
     */
    public function testNothing()
    {
        $this->assertTrue(true);
    }

    private function assertEqualsClean($expected, $actual)
    {
        $expected = trim(str_replace("\r\n", "\n", $expected));
        $actual = trim(str_replace("\r\n", "\n", $actual));

        $this->assertEquals($expected, $actual);
    }

    public function testNormalFunctionality()
    {
        $input = [
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
        ];

        $expected = <<<OUTPUT
|-----------------------------------------|
| Name  | Colour | Animal        | Number |
|-------+--------+---------------+--------|
| Sam   | Blue   | Cat           | 42     |
| Jason | Green  | Blue Whale    | 17.7   |
| Adam  | Red    | Egyptian Ibis | -1     |
|-----------------------------------------|
OUTPUT;

        $this->assertEquals($expected, getAsciiTable($input));
    }

    public function testOneColumn()
    {
        $input = [
            [
                'Direction' => 'N',
            ],
            [
                'Direction' => 'S',
            ],
            [
                'Direction' => 'W',
            ],
            [
                'Direction' => 'E'
            ]
        ];

        $expected = <<<OUTPUT
|-----------|
| Direction |
|-----------|
| N         |
| S         |
| W         |
| E         |
|-----------|
OUTPUT;

        $this->assertEquals($expected, getAsciiTable($input));
    }

    public function testOneRow()
    {
        $input = [
            [
                'Make' => 'Toyota',
                'Model' => 'Corolla',
                'Colour' => 'Ivory White',
                'Rego' => '880 JZV'
            ]
        ];

        $expected = <<<OUTPUT
|------------------------------------------|
| Make   | Model   | Colour      | Rego    |
|--------+---------+-------------+---------|
| Toyota | Corolla | Ivory White | 880 JZV |
|------------------------------------------|
OUTPUT;

        $this->assertEquals($expected, getAsciiTable($input));
    }
}
