<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 5/09/18
 * Time: 3:27 PM
 */
class SecondTask
{
//Задачи по Массивам: 5,6,7,8) Написать свою реализацию следующих функций php: array_sum, in_array, array_diff , sort.
    function arraySum($arr, $check)
    {
        echo "<b>5) array_sum </b><br> Original Array: ";
        var_dump( $arr);
        /********** FUNCTION *************/
        echo "<b>AFTER: array_sum function : </b>" . array_sum($arr);
        /*********************************/

        for ($i = 0; $i < count($arr); $i++) {
            $arrSum += $arr[$i];
        }
        echo " -----<b> Manual Sum: $arrSum </b><br/>";
    }

    function inArray($check = 31, $arr)
    {
        /********** FUNCTION *************/
        echo "<br/><b>6) </b> $check <b>in_array function: </b>" . boolval(in_array($check, $arr)) . "<br/>";
        /*********************************/
        $found = false;
        foreach ($arr as $item) {
            if ($item == $check) {
                $found = true;
                return "<b>$check In Array manual check:</b> $found <br/>";
            }
        }
    }

    function arrayDiff($arr, $check)
    {
        echo "<br/><b>7) array_diff</b><br/>";
        echo "BEFORE: " . var_dump($arr);
        /********** FUNCTION *************/
        $diff[] = array_diff($arr, $check);
        echo '<br/><b>FUNCTION array_diff: </b>';
        var_dump($diff);
        /*********************************/

        $res = [];
        foreach ($arr as $value1) {
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

    function arraySort($arr)
    {
        echo "<b>8) Bubble Sort.</b><br/>BEFORE sorting";
        var_dump($arr);

        /********** FUNCTION *************/
//        echo '<br/><b>FUNCTION sort: </b>';
//        sort($arr);
//        var_dump($arr);
        /*********************************/

        $size = count($arr);
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size-1; $j++) {
                if ($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        echo 'AFTER MANUAL sorting';
        return $arr;
    }

}
$fifth = new SecondTask();
echo $fifth->arraySum([0, 11, 204, 31, 4, 5], [30, 4, 51, 6, 7]);

$sixth = new SecondTask();
echo $sixth->inArray(5, $arr = [1, 6, 5, 5, 31]);

$seventh = new SecondTask();
var_dump($seventh->arrayDiff([0, 11, 204, 31, 4, 5], [30, 4, 51, 6, 7, 31]));

$eighth = new SecondTask();
var_dump($eighth->arraySort($arr = [0, 11, 204, 31, 4, 5, 6, 5]));