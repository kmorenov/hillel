<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 5/09/18
 * Time: 3:27 PM
 */
class SecondTask
{
    private $arr;
    public function __construct($arr)
    {
        $this->arr = $arr;
    }

//Задачи по Массивам: 5,6,7,8) Написать свою реализацию следующих функций php: array_sum, in_array, array_diff , sort.
    function arraySum()
    {
        echo "<b>5) array_sum </b><br> Original Array: ";
        var_dump( $this->arr);
        /********** FUNCTION *************/
        echo "<b>AFTER: array_sum function : </b>" . array_sum($this->arr);
        /*********************************/

        $arrSum = 0;
        for ($i = 0; $i < count($this->arr); $i++) {
            $arrSum += $this->arr[$i];
        }
        return " -----<b> Manual Sum: $arrSum </b><br/>";
    }

    function inArray($check = 6)
    {
        /********** FUNCTION *************/
        echo "<br/><b>6) </b> $check <b>in_array function: </b>" . boolval(in_array($check, $this->arr)) . "<br/>";
        /*********************************/
        $found = false;
        foreach ($this->arr as $item) {
            if ($item == $check) {
                $found = true;
                return "<b>$check In Array manual check:</b> $found <br/>";
            }
        }
        return "<b>$check In Array manual check</b> NOT found <br/>";
    }

    function arrayDiff(array $check)
    {
        echo "<br/><b>7) array_diff</b><br/>";
        echo 'BEFORE. Array to compare from.';
        var_dump($this->arr);
        echo 'Array to compare against.';
        var_dump($check);
        /********** FUNCTION *************/
        $diff[] = array_diff($this->arr, $check);
        echo '<br/><b>FUNCTION array_diff: </b>';
        var_dump($diff);
        /*********************************/

        $res = [];
        foreach ($this->arr as $value1) {
            $found = false;
            foreach ($check as $value2) {
                if ($value1 == $value2) {
                    $found = true;
                    break;
                }
            }
            if (!$found) $res[] = $value1;
        }
        echo 'AFTER Array Diff:';
        return $res;
    }

    function arraySort()
    {
        echo "<b>8) Bubble Sort.</b><br/>BEFORE sorting";
        var_dump($this->arr);

        /********** FUNCTION *************/
//        echo '<br/><b>FUNCTION sort: </b>';
//        sort($arr);
//        var_dump($arr);
        /*********************************/

        $size = count($this->arr);
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size-1; $j++) {
                if ($this->arr[$j] > $this->arr[$j+1]) {
//                  $temp = $this->arr[$j]; $this->arr[$j] = $this->arr[$j+1]; $this->arr[$j+1] = $temp;
                    list ($this->arr[$j + 1], $this->arr[$j]) = [$this->arr[$j], $this->arr[$j + 1]];
                }
            }
        }
        echo 'AFTER MANUAL sorting';
        return $this->arr;
    }

}
$fifth = new SecondTask($arr = [0, 11, 204, 31, 4, 5]);
echo $fifth->arraySum();

$sixth = new SecondTask($arr = [1, 6, 5, 5, 31]);
echo $sixth->inArray();

$seventh = new SecondTask($arr = [0, 11, 204, 31, 4, 5]);
var_dump($seventh->arrayDiff([30, 4, 51, 6, 7, 31]));

$eighth = new SecondTask($arr = [0, 11, 204, 31, 4, 5, 6, 5]);
var_dump($eighth->arraySort());