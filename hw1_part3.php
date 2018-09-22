<?php

interface ThirdTaskInterface
{
//    Задачи по строкам   Написатьть свою реализацию следующих функций php:
//10,11,12,13  strpos, substr, substr_count, explode
    public function strpos($needle);

    public function substr($str);

    public function substr_count($needle);

    public function explode($delimiter);
}

abstract class AbstractThirdTask implements ThirdTaskInterface
{
    protected $str;

    public function __construct($str)
    {
        $this->str = $str;
    }
}

class ThirdTask extends AbstractThirdTask
{
    public function strpos($needle)
    {
        $strLength = strlen($this->str);
        $needleLength = strlen($needle);
        for ($i = 0; $i < $strLength; $i++) {
            if (substr($this->str, $i, $needleLength) == $needle) {
                return 'Function: ' . strpos($this->str, $needle) . " vs Manual:  $i";
            }
        }
    }

    public function substr($start)
    {
        $arr = str_split($this->str);
        return 'Function: ' . substr($this->str, $start) . ' vs Manual: ' . implode(array_slice($arr, $start));
    }

    public function substr_count($needle)
    {
        $counter = 0;
        $count = strlen($this->str);
        for ($i = 0; $i < $count; $i++) {
            if (substr($this->str, $i, 1) == $needle) {
                $counter++;
            }
        }
        return "Function: " . substr_count($this->str, $needle) . " vs Manual: $counter";
    }

    public function explode($delimiter)
    {
        $arr_res = [];
        $count = strlen($this->str);
        $i = 0;
        $j = 0;
        while ($i < $count) {
            if ($this->str[$i] == $delimiter) {
                $j++;
            } else {
                $arr_res[$j] .= substr($this->str, $i, 1);
            }
            $i++;
        }
        echo 'Function: ';
        var_dump(explode($delimiter, $this->str));
        echo ' vs Manual: ';
        return $arr_res;
    }
}

echo "10) strpos() function<br/>";
$t10 = new ThirdTask('Hello World');
var_dump($t10->strpos('el'));

echo "11) substr() function<br/>";
$t11 = new ThirdTask('Hello World');
var_dump($t11->substr(3));

echo "12) substr_count() function<br/>";
$t12 = new ThirdTask('Hello World');
var_dump($t12->substr_count('l'));

echo "13) explode() function<br/>";
$t13 = new ThirdTask('Hello World again thanks');
var_dump($t13->explode(' '));
