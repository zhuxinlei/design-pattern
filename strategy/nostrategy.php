<?php
/**
 * 没有使用策略模式的类
 * User: zhuxinlei
 * Date: 2018/6/11
 * Time: 下午9:25
 */
class NoStrategy{
    public function render($type,$array){
        if($type == 'json'){
            return json_encode($array);
        }elseif($type == 'serilize'){
            return serialize($array);
        }elseif($type == 'array'){
            return $array;
        }
    }
}
//客户端调用
$array = array(1,2,3);
$client = new NoStrategy();
$output = $client->render('json',$array);
print_r($output);