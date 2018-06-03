<?php
/*
*description 简单工厂模式
*author zhuxinlei
*date 20180602
**/
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
class SimpleFactory{
	static function getInstance($classname){
		if($classname == 'Bmw'){
			return new Bmw();
		}elseif($classname == 'Dongnan'){
			return new Dongnan();
		}else{

		}
	}
}
$car = SimpleFactory::getInstance('Bmw');
$car->run();
?>
