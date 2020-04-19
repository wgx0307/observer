<?php
namespace Order;

/**
 * Created by : PhpStorm
 * author: wgx0307
 * Date: 2020/4/19
 * Time: 23:29
 */

use OrderNotice\OrderNotice;


class Order implements OrderNotice
{


    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        echo "修改订单相关信息".PHP_EOL;
    }
}