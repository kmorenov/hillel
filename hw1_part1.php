<?php

class First
{
    private $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

//1) Написать метод который выводит все положительные четные числа которые менье заданного.
    public function positives($check)
    {
        foreach ($this->arr as $a) {
            if (is_int($a) && $a > 0 && $a % 2 == 0 && $a < $check) {
                $res[] = $a;
            }
        }
        return $res;
    }

//3) найти в массиве число второе по величине.
    public function secondLargest()
    {
        $largest[] = max($this->arr);
        $arr = array_diff($this->arr, $largest);
        return max($arr);

    }

//4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.
    public function elemReplace(&$arr, $z)
    {
        $i = 0;
        foreach ($arr as &$a) {
            if ($a > $z) {
                $a = $z;
                $i++;
            }
        }
        return $i;
    }
}
var_dump($arr = [1,-2,3,4,5,7,-8,16,27,37,44,68,849,-8,18, 7.8, 8.8, 24]);
$f = new First($arr);
echo '<b>1) Positive even numbers smaller than ' . $check = 25 . ': </b>';
var_dump($f->positives($check));

var_dump($arr = [1,6,8,9,11,34,77,66,55,67,-99]);
$s = new First($arr);
echo '<b>3) Second largest number is: </b>' . $s->secondLargest($arr);

echo '<br/><br/><b> 4) Replace values in array</b>';
var_dump($arr = [1,2,5,8,11,78,45,47,50,24]);
$i = $f->elemReplace($arr, 25);
echo '<b>replaced values in array ' . $i . ' times</b>';
var_dump($arr);