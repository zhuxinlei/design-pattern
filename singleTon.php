<?php
/**
 * 单例模式
 * User: zhuxinlei
 * Date: 2018/6/3
 * Time: 下午5:16
 */
class SingleTon{
    private static $conn;
    //禁止实例化
    private function __construct(){}
    private function __clone(){}
    public static function getInstance(){
        if(isset(self::$conn)){
            return self::$conn;
        }   else{
            return self::$conn = new SingleTon();
        }
    }
    public function test(){
        echo ' I am a test unit';
    }

}

$singleTon = SingleTon::getInstance();
//$singleTon = new SingleTon(); 禁止实例化 
$singleTon->test();

?>