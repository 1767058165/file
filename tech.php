Toran Proxy///////////////
注意反斜扛转义$listdd.= "<li class=\"thisclass\">$j</li>\r\n";
以<<<End开始标记开始，开始标记后面不能有空格，以End结束标记结束，结束标记必须顶头写，不能有缩进和空格，且在结束标记末尾要有分号 。

命名空间在PHP5.3.0中引入，其作用是按照一种虚拟的层次结构组织PHP代码，这种层次结构类似操作系统中文件系统的目录结构。

Callback 回调类型与类 Closure
********php自动加载机制///////////************************

$controller = new $controller_name;
正则表达式--[x] 匹配x字符，如匹配字符串中的 a、b 和 c 字符
PHP函数explode和split--这两个函数的作用很像，都是把字符串转换成数组

CSS word-spacing 属性：指定断字之间的空间
CSS letter-spacing 属性：设置字符间距 
pHP 实现了一种代码复用的方法，称为 trait。
Trait的使用方法也很简单，上面已经显示的很清楚明了，即使用use关键字。

可能你已经注意到，命名空间和Trait使用的都是use关键字，不同之处在于导入位置，命名空间在类的定义体外导入，而Trait在类的定义体内导入。

PHP标准库（SPL）

PHP5为这个问题提供了一个解决方案，这就是类的自动装载(autoload)机制。autoload机制可以使得PHP程序有可能在使用类时才自动包含类文件，而不是一开始就将所有的类文件include进来，这种机制也称为lazy loading。

通常PHP5在使用一个类时，如果发现这个类没有加载，就会自动运行__autoload()函数，在这个函数中我们可以加载需要使用的类。

怎 样让spl_autoload自动起作用呢，也就是将autoload_func指向spl_autoload？答案是使用 spl_autoload_register函数。在PHP脚本中第一次调用spl_autoload_register()时不使用任何参数，就可以将 autoload_func指向spl_autoload。

spl_autoload_call
(PHP 5 >= 5.1.2, PHP 7)
spl_autoload_call — 尝试调用所有已注册的__autoload()函数来装载请求类

PHP中可以用PHP_EOL来替代换行符，以提高代码的源代码级可移植性，类似常用的还有
DIRECTORY_SEPARATOR，可以用函数get_defined_constants()来获取所有PHP常量。

从PHP 5.5.0开始，PHP内置了字节码缓存功能，名为Zend Opcache。

PEAR是PHP扩展与应用库(the PHP Extension and Application Repository)的缩写。PEAR库更新很快，它是一个强大的代码仓库，每个PHP程序员都应该掌握的工具。

php变量规定以$前缀开头
】函数explode和spli t，是因为这两个函数的作用很像，都是把字符串转换成数组
序列化是将变量转换为可保存或传输的字符串的过程
PHP多种序列化/反序列化的方法：
1、serialize和unserialize函数
2、json_encode 和 json_decode

使用JSON格式序列化和反序列化是一个不错的选择： 

composer局部跟全局安装不同点，在访问位置不同，全局和局部访问。

use osCommerce\OM\Core\OSCOM;作用；导入名字是oscom类源码

 $this->processing--;

//这里的new static()实例化的是调用该静态方法的当前类。
        return new static();

//这里的static和上面的例子一样，表示当前调用该方法的实际类。
        //需要另外说明的是，这里的getGroup方法即便不是静态方法，也会得到相同的结果。然而倘若
        //getGroup真的只是普通类方法，那么这里还是建议使用$this。
        $this->ownedGroup = static::getGroup();

判断对象相等：{
serialize($a) === serialize($b)
//或者
json_encode($a) === json_encode($b) //这个方法忽略同一个类的实例

或者强制转换成数组（这个方法忽略同一个类的实例）：

(array) $a === (array)$b
}

每个PHP类、接口、函数和常量都在命名空间中，声明命名空间很简单，在<?php 标签后的第一行声明，声明语句以namespace开头，随后是一个空格，然后是命名空间的名称，最后以;结尾

导入命名空间---导入的意思是指，在每个PHP文件中告诉PHP想使用哪个命名空间、类、接口、函数和常量，导入后就不用使用全名了

__autoload — 尝试加载未定义的类

接口也可以继承，通过使用 extends 操作符。

分类：
1.索引数组（以数组为下标）
 如：$arr[2]
2.关联数组（以字符串为下标）
如：$arr["aa"]

unset（）销毁指定的变量。

如果在函数中 unset() 一个全局变量，则只是局部变量被销毁，而在调用环境中的变量将保持调用 unset() 之前一样的值。

类继承，除了继承父元素所有方法，还有成员属性。

php程序主要是各类之间协同调用。

当调用者需要被调用者的协助时，在传统的程序设计过程中，通常由调用者来创建被调用者的实例，但在这里，创建被调用者的工作不再由调用者来完成，而是将被调用者的创建移到调用者的外部，从而反转被调用者的创建，消除了调用者对被调用者创建的控制，因此称为控制反转。

要实现控制反转，通常的解决方案是将创建被调用者实例的工作交由 IoC 容器来完成，然后在调用者中注入被调用者（通过构造器/方法注入实现），这样我们就实现了调用者与被调用者的解耦，该过程被称为依赖注入。

定义为抽象的类不能被实例化

php函数参数类型：class、interface、回调函数callable（接收类型为函数）

PHP 在用户自定义函数中支持可变数量的参数列表。在 PHP 5.6 及以上的版本中，由 ... 语法实现；

foreach ($arr as &$value) { foreach写法
    $value = $value * 2;
}
魔术方法：
__set() 方法用于设置私有属性值。
__get() 方法用于获取私有属性值。
__isset() 方法用于检测私有属性值是否被设定。
__unset() 方法用于删除私有属性。

phpversion();版本号
parent关键字----用来访问了基类的静态变量和函数

php强制类型转换

PHP 5 新增了一个 final 关键字。如果父类中的方法被声明为 final，则子类无法覆盖该方法。如果一个类被声明为 final，则不能被继承.

(PHP 5 >= 5.4.0, PHP 7)
Closure::bindTo — 复制当前闭包对象，绑定指定的$this对象和类作用域。

array_unshift() - 在数组开头插入一个或多个单元,
array_shift — 将数组开头的单元移出数组

php标准库SPL是用于解决典型问题(standard problems)的一组接口与类的集合。
*************************************
PHP中对象的深拷贝与浅拷贝:
 深拷贝：赋值时值完全复制，完全的copy，对其中一个作出改变，不会影响另一个
 浅拷贝：赋值时，引用赋值，相当于取了一个别名。对其中一个修改，会影响另一个
PHP中， = 赋值时，普通对象是深拷贝，但对对象来说，是浅拷贝。也就是说，对象的赋值是引用赋值
  由于对象的赋值时引用，要想实现值复制，php提供了clone函数来实现复制对象。
  
  ，php提供了clone函数来实现复制对象。
  
但是clone函数存在这么一个问题，克隆对象时，原对象的普通属性能值复制，但是源对象的对象属性赋值时还是引用赋值，浅拷贝
  
  要想实现对象真正的深拷贝，有下面两种方法：

写clone函数：如下
   //方法一：重写clone函数
    public function __clone(){
        $this->obj = clone $this->obj;
    }
 写__clone()函数不太方便，而且你得在每个类中把这个类里面的对象属性都在__clone()中 一一 clone

第二种方法，利用序列化反序列化实现,这种方法实现对象的深拷贝简单，不需要修改类
 //方法二，序列化反序列化实现对象深拷贝
$n = serialize($m);
$n = unserialize($n);
********************************************
首先要注意的是命名空间只起申明作用，也就是在使用了命名空间的时候依然得把这个命名空间申明的那个文件包含进来
其实php的use声明并不是将此类导入到当前工作区域，而是单单指明

use Web\Tools;

 命名空间和自动加载初探
参考资料：
PHP手册-语言参考：http://php.net/manual/zh/language.namespaces.php
 
概要：
1. 声明了命名空间之后，下面的const, function, class都会划归到该命名空间。
2. 只有声明过命名空间的PHP 文件才能加载有命名空间的PHP文件。
3. PHP 5.3 及以上才能使用命名空间
 
php的闭包（Closure）也就是匿名函数。是PHP5.3引入的。

闭包的语法很简单，需要注意的关键字就只有use，use意思是连接闭包和外界变量。

$a = function() use($b) {
 
}
 
 如果你需要延迟绑定use里面的变量，你就需要使用引用，否则在定义的时候就会做一份拷贝放到use中

**********************************
<?php
$result = 0;
 
$one = function()
{ var_dump($result); };
 
$two = function() use ($result)
{ var_dump($result); };
 
$three = function() use (&$result)
{ var_dump($result); };
 
$result++;
 
$one();    // outputs NULL: $result is not in scope
$two();    // outputs int(0): $result was copied
$three();    // outputs int(1)
 

使用引用和不使用引用就代表了是调用时赋值，还是申明时候赋值
 *************************
PHP不区分路径大小写而JSP区分大小写
 php反斜线\也能读取文件路径
 **********************
 use的几种用法

namespace Blog\Article;
class Comment { }
 /导入一个命名空间
use Blog\Article;
//导入命名空间后可使用限定名称调用元素
$article_comment = new Article\Comment();

//为命名空间使用别名
use Blog\Article as Arte;
//使用别名代替空间名
$article_comment = new Arte\Comment();

//导入一个类
use Blog\Article\Comment;
//导入类后可使用非限定名称调用元素
$article_comment = new Comment();

//为类使用别名
use Blog\Article\Comment as Comt;
//使用别名代替空间名
$article_comment = new Comt();
 ***********************************
call_user_func() 命名空间的使用
  
  <?php

namespace Foobar;

class Foo {
    static public function test() {
        print "Hello world!\n";
    }
}


 call_user_func(__NAMESPACE__ .'\Foo::test'); // As of PHP 5.3.0
call_user_func(array(__NAMESPACE__ .'\Foo', 'test')); // As of PHP 5.3.0

?>
 *******************
in_array

(PHP 4, PHP 5, PHP 7)
in_array — 检查数组中是否存在某个值
 --------------------------------------
 usort

(PHP 4, PHP 5, PHP 7)
usort — 使用用户自定义的比较函数对数组中的值进行排序
---------------------------------------
 string dirname ( string $path )
给出一个包含有指向一个文件的全路径的字符串，本函数返回去掉文件名后的目录名。
 ____________________________________________________________________
 substr
string substr ( string $string , int $start [, int $length ] )
(PHP 4, PHP 5, PHP 7)
substr — 返回字符串的子串
 特殊用法：如果提供了负数的 length，那么 string 末尾处的许多字符将会被漏掉（若 start 是负数则从字符串尾部算起）。
 例如：$rest = substr("abcdef", 0,-1);    // 返回 "abcde"
 $rest = substr("abcdef", -2);    // 返回 "abcd"
***************************
 filter_var

(PHP 5 >= 5.2.0, PHP 7)
filter_var — 使用特定的过滤器过滤一个变量
*****************
 保存被上传的文件
上面的例子在服务器的 PHP 临时文件夹创建了一个被上传文件的临时副本。
这个临时的复制文件会在脚本结束时消失。要保存被上传的文件，我们需要把它拷贝到另外的位置，还需要move_uploaded_file函数
*********************
 php换行：
  \n这个只是源代码下的换行,而不是显示的效果，不要写成/n
通常情况下，PHP $_SERVER['SCRIPT_FILENAME'] 与 __FILE__ 都会返回 PHP 文件的完整路径（绝对路径）与文件名，但还是有一些细微差别
 ******************
注意提交表单按钮type属性为submit，post方式与$_POST依依对应
 *********
 get_magic_quotes_gpc（）判断是否开启魔术引用，即为单引号、双引号添加反斜杠
 ************
 $GLOBALS — 引用全局作用域中可用的全部变量，可以这样$GLOBALS['_POST']获取$_POST变量的值
 ********
 Edit Report a Bug
ini_get

(PHP 4, PHP 5, PHP 7)
ini_get(1个参数) — 获取一个配置选项的值,相对应的是ini_set(2个参数)
register_globals的意思就是注册为全局变量，所以当On的时候，传递过来的值会被直接的注册为全局变量直接使用，而Off的时候，我们需要到特定的数组里去得到它。

 get_class()
(PHP 4, PHP 5, PHP 7)
get_class — 返回对象的类名
***********
 表单提交到自身时 action=”” 与 action=”currentPage.xxx” 的区别,获取当前页面 $_SERVER['PHP_SELF']
 传参格式："index.php?参数1=值1&参2=值2"
cmd直接进入d盘，直接输入d:即可，不用输入cd ;cd ..回到上级；cd 文件夹名：进入此文件夹；cd /回到根目录
 php_sapi_name

(PHP 4 >= 4.0.1, PHP 5, PHP 7)
php_sapi_name — 返回 web 服务器和 PHP 之间的接口类型
