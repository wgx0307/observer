<?php
namespace PayAfter;

/**
 * Created by : PhpStorm
 * author: wgx0307
 * Date: 2020/4/19
 * Time: 23:29
 */
class PayAfter{
    private $objs = array();

    function addObj($obj){
        $this->objs[] = $obj;
    }
    function notice($data){
        foreach ($this->objs as $obj){
            $obj->notice($data);
        }
    }
}