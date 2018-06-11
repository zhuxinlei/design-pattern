<?php
/**
 * 没有观察者模式的实例
 * User: zhuxinlei
 * Date: 2018/6/4
 * Time: 下午11:49
 */
class order{ 
    public function addOrder(){
        //发短信
        Message::update();
        //发邮件
        Email::update();
        //记日志
        Log::update();
    }
} 
$order = new order();
$order->addOrder();
?>