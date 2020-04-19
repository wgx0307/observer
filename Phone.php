<?php
namespace Phone;

/**
 * Created by : PhpStorm
 * author: wgx0307
 * Date: 2020/4/19
 * Time: 23:29
 */

use OrderNotice\OrderNotice;

class Phone implements OrderNotice
{

    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {
        $message ='您消费'.$data['money'].$data['name'].'您真有钱！！！！';
         echo "发送短信给客户:".$data['name'].$message.PHP_EOL;
    }
}