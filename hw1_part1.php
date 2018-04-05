<?php

class First
{
//1) Написать метод который выводит все положительные четные числа которые менье заданного.
    function positives($arr, $check)
    {
        foreach ($arr as $a) {
            if (is_int($a) && $a > 0 && $a % 2 == 0 && $a < $check) {
                $res[] = $a;
            }
        }
        return $res;
    }

//2) Вывести определенное количество элементов  последовательности Фибоначчи.
    function sequenceFibonacci($number)
    {
        $res = [1];
        for ($i = 0; $i < $number; $i++) {
            $res[] = $res[$i] + $res[$i-1];
        }
        return $res;
    }

//3) найти в массиве число второе по величине.
    function secondLargest($arr)
    {
        var_dump($arr);
        $largest[] = max($arr);
        $arr = array_diff($arr, $largest);
        return max($arr);

    }

//4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.
    function elemReplace($arr, $z, &$i)
    {
        foreach ($arr as $a) {
            if ($a > $z) {
                $arr = str_replace($a, $z, $arr);
                $i++;
            }
        }

        foreach ($arr as $a) {
            $arr_int[] = intval($a);
        }
        return $arr_int;
    }

//Задачи по Массивам: 5,6,7,8) Написать свою реализацию следующих функций php: array_sum, in_array, array_diff , sort.
//Задачи по строкам: 10,11,12,13)   Написать свою реализацию следующих функций php: strpos, substr, substr_count, explode.
}
$f = new First();
var_dump($arr = [1,-2,3,4,5,7,-8,16,27,37,44,68,849,-8,18, 7.8, 8.8, 24]);
echo '<b>1) Positive even numbers smaller than ' . $check = 25 . ': </b>';
var_dump($f->positives($arr, $check));

echo '<b>2) ' . $number=20 . ' elements of Fibonacci sequence: </b>';
var_dump($f->sequenceFibonacci($number));

echo '<b>3) Second largest number is: </b>' . $f->secondLargest([1,6,8,9,11,34,77,66,55,67,-99]);

echo '<br/><br/><b> 4) Replace values in array</b>';
var_dump($arr = [1,2,5,8,11,78,45,47,50,24]);
var_dump($f->elemReplace($arr, 25, $i));
echo '<b>replaced values in array ' . $i . ' times</b>';