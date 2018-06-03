<?php
/* 
*description 没有使用工厂模式的情况下
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
$bmw = new Bmw();
$bmw->run();echo '<br>';
$bmw->voice();echo '<br>';


$dongnan = new Dongnan();
$dongnan->run();echo '<br>';
$dongnan->voice();	
?>
