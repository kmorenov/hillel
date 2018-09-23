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
    protected $strlen;

    public function __construct($str)
    {
        $this->str = $str;
        $this->strlen = strlen($this->str);
    }
}

class ThirdTask extends AbstractThirdTask
{
    public function strpos($needle)
    {
        $needleLength = strlen($needle);
        for ($i = 0; $i < $this->strlen; $i++) {
            if (substr($this->str, $i, $needleLength) == $needle) {
                return $i;
            }
        }
        return 'Needle NOT found';
    }

    public function substr($start)
    {
        $substr = implode(array_slice(str_split($this->str), $start));
        return $substr;
    }

    public function substr_count($needle)
    {
        $counter = 0;
        for ($i = 0; $i < $this->strlen; $i++) {
            if (substr($this->str, $i, 1) == $needle) {
                $counter++;
            }
        }
        return $counter;
    }

    public function explode($delimiter)
    {
        $arr_res = [];
        $i = 0;
        $j = 0;
        while ($i < $this->strlen) {
            if ($this->str[$i] == $delimiter) {
                $j++;
            } else {
                $arr_res[$j] .= substr($this->str, $i, 1);
            }
            $i++;
        }
        return $arr_res;
    }
}

echo '10) strpos() <br/><b>Function: </b>' . strpos($string = 'Hello World', $needle = 'o') . '<b> vs Manual: </b>';
$t10 = new ThirdTask($string);
echo $t10->strpos($needle) . '</b><br/><br/>';

echo '11) substr() <br/><b>Function: </b>' . substr($string = 'Hello World', $start = 6) . '<b> vs Manual: </b>';
$t11 = new ThirdTask($string);
echo $t11->substr($start) . '</b><br/><br/>';

echo '12) substr_count() <br/><b>Function: </b>' . substr_count($string = 'Hello World', $needle = 'l') . '<b> vs Manual: </b>';
$t12 = new ThirdTask($string);
echo $t12->substr_count($needle) . '<br/><br/>';

echo '13) explode()<br/><b>Function: </b>';
var_dump(explode($delimiter = ' ', $string = 'Hello World again thanks'));
echo '<b> vs Manual: </b>';
$t13 = new ThirdTask($string);
var_dump($t13->explode($delimiter));
