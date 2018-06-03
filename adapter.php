<?php
/**
 * 适配器类
 * User: zhuxinlei
 * Date: 2018/6/3
 * Time: 下午10:56
 */
class Ali{
    function alipay(){
        echo '阿里支付';
    }
}
class Tencent{
    function tencentpay(){
        echo '腾讯支付';
    }
}
interface  pay{
    function thirdpay();
}

class AdapterAlipay implements  pay{
    function thirdpay(){
        $ali = new Ali();
        $ali->alipay();
    }
}
class AdapterTencent implements  pay{
    function thirdpay()
    {
        $tencent = new Tencent();
        $tencent->tencentpay();
    }
}
$ali = new AdapterAlipay();
$ali->thirdpay();
//这样阿里如果以后修改接口名称的话,我们只需要在适配器中修改一次即可满足需求

//试想一下,在这里我们能否和工厂模式结合起来呢?因为一次只可能使用到一种支付方式,我们是否可以根据参数判断使用哪一种支付方式,
//而不用自己去实例化类,减少调用方和类的关系呢?
?>