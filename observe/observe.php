<?php
/**
 * 观察者模式
 * User: zhuxinlei
 * Date: 2018/6/4
 * Time: 下午11:55
 */
//被观察者接口
interface Observable{
    function add(observe $observe);
    function del(observe $observe);
    function notify();
}
//订单被观察者
class order implements Observable{
    private $instance=array();
    function add(observe $observe)
    {
        $key = array_search($observe,$this->instance);
        if($key === false){
            $this->instance[] = $observe;
        }
    }
    function del(observe $observe)
    {
        $key = array_search($observe,$this->instance);
        if($key !== false){
            unset($this->instance[$key]);
        }
    }
    function notify()
    {
        foreach($this->instance as $key=>$val){
            $val->update();
        }
    }
}
interface observe{
    function update();
}
class Email implements  observe{
    function update(){
        echo '发送邮件';
    }
}
class Message implements  observe{
    function update(){
        echo '发送短信';
    }
}

//客户端调用
$order = new order();
$order->add(new Email());
$order->add(new Message());
$order->del(new Email());
$order->notify();
?>