<?php
/**
 * 使用策略模式
 * User: zhuxinlei
 * Date: 2018/6/11
 * Time: 下午9:28
 */
interface output{
    function render($array);
}
class JsonOutput implements output{
    function render($array){
        return json_encode($array);
    }
}

class SerializeOutput implements  output{
    function render($array)
    {
        return serialize($array);
    }
}

//客户端调用代码
$array = array(1,2,3);
$client = new SerializeOutput();
$output = $client->render($array);
print_r($output);

// 注意:上面这种写法,貌似没啥新奇的,感觉没啥改进如果我们在增加一个角色呢

class Trans{
    private $output;
    public function __construct($client)
    {
        $this->output = $client;
    }
    public function output(){
        $this->output->render();
    }
}

//客户端调用代码
$array = array(1,2,3);
$trans = new Trans(new SerializeOutput($array));
$output = $trans->output();
print_r($output);


//这两种写法有何不同呢?如果以后业务逻辑增加的话复杂度对于这两种写法来说是相同的,但总感觉后者比第一种要高大上一点
//第二种方法和上面我们说的观察者模式是不是很像,只不过应用场景不同导致理解上出现了偏差,