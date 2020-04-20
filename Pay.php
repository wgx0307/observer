<?php
namespace Pay;

/**
 * Created by : PhpStorm
 * author: wgx0307
 * Date: 2020/4/19
 * Time: 23:29
 */
require_once 'OrderNotice.php';
require_once 'PayAfter.php';
require_once 'Email.php';
require_once 'Phone.php';

use OrderNotice\OrderNotice;
use PayAfter\PayAfter;
use Email\Email;
use Phone\Phone;

class Pay implements OrderNotice
{
    public function Success(){
        $data =[
            'order_id'=> 110,
            'name'=>'王总',
            'email' =>'771155535@qq.com',
            'coupon_id'=>250,
            'money'=>1000000000
        ];
        $class = new PayAfter();
        $class->addObj(new Email());
        $class->addObj(new Phone());
        $class->notice($data);
    }

    /**
     * @param array $data
     * @return mixed
     * @describe: 支付成功后通知的信息操作
     */
    public function notice($data = array())
    {

    }
}


(new Pay)->Success();
