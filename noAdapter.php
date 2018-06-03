<?php
/**
 * 没有适配器的代码
 * User: zhuxinlei
 * Date: 2018/6/3
 * Time: 下午10:48
 */
// 代码简单易懂,阿里提供支付接口,客户端调用,但这样会有一个问题,假如阿里修改了支付的方法名,
//而我们在代码中有很多调用该方法的接口怎么办呢?难道要一个个的修改?如果阿里有相关的100个方法,我们调用了无数次呢?这时候就需要
//一个中间件来转化一下
class Alipay{
    function pay(){
        echo '阿里支付';
    }
}
$ali = new Alipay();
$ali->pay();



//像刚才上面说的那样,腾讯也挺高了自己的支付接口,也会遇到上面同样的问题,一个个的修改问题更明显了
class Tencent{
    function tencentpay(){
        echo '腾讯支付';
    }
}
$tencent = new Tencent();
$tencent->tencentpay();
?>