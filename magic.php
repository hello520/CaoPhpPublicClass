<?php
class magic_function{
	public  function __construct(){
		echo '构造函数这是魔术方法__construct当进行实例化对象时调用<br>$magic = new magic_function;<br>当使用静态方法是不被调用magic_function:static_function<br>';
	}
	public function __destruct(){
		echo "析构函数与构造函数相同，当对象销毁时调用，如果对象复制给静态变量，则会一直存在<br>";
	}
	/*
	$name 调用的方法名
	$arguments 调用方法是传递的参数
	*/
	public function __call($name,$arguments){
		echo "当调用该类不存在的方法是调用";
		printf("正在调用普通方法%s传递参数为:".implode(', ', $arguments).'<br>',$name);
	}
	/*
	$name 调用的方法名
	$arguments 调用方法是传递的参数
	*/
	public static function __callStatic($name,$arguments){
		echo "当调用匪类·该类不存在的静态方法时调用";
		printf("正在调用普通方法'%s'传递参数为:".implode(', ', $arguments).'<br>',$name);
	}

	/*在给不可访问属性赋值时，__set() 会被调用。

	读取不可访问属性的值时，__get() 会被调用。

	当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用。

	当对不可访问属性调用 unset() 时，__unset() 会被调用。*/
	public function __set($name,$arguments){
		echo "";
	}

}
$magic = new magic_function();
$magic->get('调用get');
$magic::get('调用staticget');