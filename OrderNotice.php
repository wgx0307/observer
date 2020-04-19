<?php
namespace OrderNotice;

/**
 * Created by : PhpStorm
 * author: wgx0307
 * Date: 2020/4/19
 * Time: 23:29
 */

interface OrderNotice
{
    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data=array());

}