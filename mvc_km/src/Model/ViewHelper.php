<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/09/18
 * Time: 7:51 AM
 */

class ViewHelper
{

    public function myLink($id, $page)
    {
        $qstr = 'index.php?id=' . $id . '&page=' . $page;
        return $qstr;
    }

}