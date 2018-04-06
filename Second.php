<?php
echo '<b>Homework 1. Continued from hw1_part1.php</b><br/><br/>';
class Second
{

    function __construct($number)
    {
        $this->number = $number;
    }

    //2) Вывести определенное количество элементов  последовательности Фибоначчи.
    public function sequenceFibonacci()
    {
        $res = [1];
        for ($i = 0; $i < $this->number; $i++) {
            $res[] = $res[$i] + $res[$i-1];
        }
        return $res;
    }
}

echo '<b>2) ' . $number=15 . ' elements of Fibonacci sequence: </b>';
$f = new Second($number);
var_dump($f->sequenceFibonacci());