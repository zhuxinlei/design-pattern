<?php
/**
 * Created by PhpStorm.
 * User: zhuxinlei
 * Date: 2018/6/3
 * Time: 下午4:15
 */
interface Car{
    function run();
    function voice();
}
class Bmw implements Car{
    function run(){
        echo 'I run fast';
    }
    function voice(){
        echo 'I am silent';
    }
}
class Dongnan implements Car{
    function run(){
        echo '我起步慢，加速慢，给油还给不上';
    }
    function voice(){
        echo 'I am noisy boy';
    }
}

class BmwFactory{
    public static function  createCar(){
        return new Bmw();
    }
}
class DongnanFactory{
    public static function createCar(){
        return new Dongnan();
    }
}
$car = BmwFactory::createCar();
$car->run();
?>