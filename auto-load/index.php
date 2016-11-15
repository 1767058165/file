<?php
spl_autoload_register(function ($class) {
	$file = str_replace('\\', '/', $class);

	$file =$class . '.php';   
if (is_file($file)) {   
require_once($file);   

}
 });//自动加载命名空间文件

$tree=new \Space\Tree(); 
$tree->leaves();
$trees = new  \Time\Tree();         //这是使用的time/Tree.php中的类Tree
$trees->leaves();