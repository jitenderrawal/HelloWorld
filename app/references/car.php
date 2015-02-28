<?php
/**
 * Created by PhpStorm.
 * User: jrawal
 * Date: 2/25/2015
 * Time: 1:47 PM
 */

class car
{

    var $test = "jit";

function getmake()
{
    $make = "Toyota";
    return $make . $this->test;
}

}
?>