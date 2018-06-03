<?php
/**
 * 适配器结合工厂类
 * User: zhuxinlei
 * Date: 2018/6/3
 * Time: 下午11:25
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

class payFactory{
    public static  function pay($third){
        if($third == 'ali'){
            return new AdapterAlipay();
        }elseif($third == 'tencent'){
            return new AdapterTencent();
        }else{

        }
    }
}
$thirdpay = payFactory::pay('ali');
$thirdpay->thirdpay();
?>