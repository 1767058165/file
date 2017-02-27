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
 $GLOBALS — 引用全局作用域中可用的全部变量，可以这样$GLOBALS['_POST']获取$_POST变量的值及自定义变量的值
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
 *******
 php cli模式执行程序: php  php文件名
*****
 realpath

(PHP 4, PHP 5, PHP 7)
realpath — 返回规范化的绝对路径名

说明

string realpath ( string $path )
realpath() 扩展所有的符号连接并且处理输入的 path 中的 '/./', '/../' 以及多余的 '/' 并返回规范化后的绝对路径名。返回的路径中没有符号连接，'/./' 或 '/../' 成分。
*************************
array_keys

(PHP 4, PHP 5, PHP 7)
array_keys — 返回数组中部分的或所有的键名
 **************
list

(PHP 4, PHP 5, PHP 7)
list — 把数组中的值赋给一些变量
 list($ns2)=array("56");
 例如：
 var_dump($ns2);
 array(2) { [0]=> string(1) "6" [1]=> string(1) "5" }

 base64_encode

(PHP 4, PHP 5, PHP 7)
base64_encode — 使用 MIME base64 对数据进行编码
 此编码方式可以让中文字或者图片也能在网络上顺利传输。在 BASE64 编码后的字符串只包含英文字母大小写、阿拉伯数字、加号与反斜线，共 64 个基本字符，不包含其它特殊的字符，因而才取名 BASE64。

 
 // 时间无限制
set_time_limit ( 0 );

php使用openssl函数实现rsa非对称加密算法：形如（

-----BEGIN PUBLIC KEY----- 
X509 signature + PEM sig + modulus + 'ID' + exponent 
-----END PUBLIC KEY----- ）

header("Content-type: text/html; charset=utf-8");    


number_format

(PHP 4, PHP 5, PHP 7)
number_format — 以千位分隔符方式格式化一个数字

PHP 中的类型强制转换和 C 中的非常像：在要转换的变量之前加上用括号括起来的目标类型，通常不需要这么做。

php加速引擎--zeng engine,php4引擎从php分离开，成独立软件。

json_encode();json_encode — 对变量进行 JSON 编码,变量除了resource 类型之外，可以为任何数据类型

php CURL是一个非常强大的开源库，支持很多协议，包括HTTP、FTP、TELNET等，我们使用它来发送HTTP请求。它给我 们带来的好处是可以通过灵活的选项设置不同的HTTP协议参数，并且支持HTTPS。CURL可以根据URL前缀是“HTTP” 还是“HTTPS”自动选择是否加密发送内容。

，socket是一种数据结构，他可以用来在服务器和客户端进行对话。而curl是利用url语法规定来传输文件和数据的规定，支持很多协议，例如FTP,HTTP、TELNET等。

list() 仅能用于数字索引的数组并假定数字索引从 0 开始。

用each函数与list函数结合来遍历数组，可遍历索引数组如下例： 
复制代码 代码如下: 
1 <?php 
2 $array14=array('a' => 'apple', 'b' => 'banana', 'c' => 'cranberry'); 
3 while(list($key,$value) = each($array14)) 
4 { 
5 echo "$key => $value\n"; 
6 } 

echo"密码域为125","1%125";多个参数

PHP取整函数，主要是：ceil，floor，round，intval

采用mb_strlen函数可以较好地解决这个问题。mb_strlen的用法和 strlen类似，只不过它有第二个可选参数用于指定字符编码。

%除数限制取值范围

限制返回的行数
使用TOP n [PERCENT]选项限制返回的数据行数，TOP n说明返回n行，而TOP n PERCENT时，说明n是
表示一百分数，指定返回的行数等于总行数的百分之几。
例如：
SELECT TOP 2 * FROM `testtable`

在FROM子句中可用以下两种格式为表或视图指定别名：
表名 as 别名
表名 别名

如果你需要拷贝整个表，你可以使用SELECT INTO 语句

TRUNCATE TABLE语句，删除表

内连接、外连接和交叉连接，外连接分为左外连接(LEFT OUTER JOIN或LEFT JOIN)、右外连接(RIGHT OUTER JOIN或RIGHT JOIN)

新增字段：
ALTER TABLE [表名] ADD [字段名] NVARCHAR (50) NULL

更新数据：
UPDATE [表名] SET [字段1] = 1,[字段2] = 'ABC' WHERE [字段三] = 'what'

JavaScript中的Object对象，是JS中所有对象的基类，也就是说JS中的所有对象都是由Object对象衍生的。Object对象主要用于将任意数据封装成对象形式。

range

(PHP 4, PHP 5, PHP 7)
range — 建立一个包含指定范围单元的数组

array_rand

(PHP 4, PHP 5, PHP 7)
array_rand — 从数组中随机取出一个或多个单元

strtr

(PHP 4, PHP 5, PHP 7)
strtr — 转换指定字符，注意是单个字符
协议--软件协议和传输协议
封装协议---不同加密方式的协议

命令行；php -v 查看php版本号

header("Content-type: text/html; charset=utf-8");注意冒号与等号

unlink — 删除文件

ord

(PHP 4, PHP 5, PHP 7)
ord — 返回字符的 ASCII 码值
ascii属于字节编码，utf-8属于字符编码

chr

(PHP 4, PHP 5, PHP 7)
chr — 返回指定的字符，此函数与 ord() 是互补的。
 
 wdcp管理系统,linux服务器管理系统/虚拟主机管理系统/管理面板-

  php中array_merge和array+array的差别

glob()和scandir() 一样，可以用来查找文件

很多朋友都利用md5()来生成唯一的编号，但是md5()有几个缺点：1、无序，导致数据库中

排序性能下降。2、太长，需要更多的存储空间。其实PHP中自带一个函数来生成唯一的id，

这个函数就是uniqid()。

echo

(PHP 4, PHP 5, PHP 7)
echo — 输出一个或多个字符串

php_sapi_name

(PHP 4 >= 4.0.1, PHP 5, PHP 7)
php_sapi_name — 返回 web 服务器和 PHP 之间的接口类型

PHP序列化功能大家可能用的比较多，也比较常见，当你需要把数据存到数据库或者文件中

是，你可以利用PHP中的serialize() 和 unserialize()方法来实现序列化和反序列化。

当我们说到压缩，我们可能会想到文件压缩，其实，字符串也是可以压缩的。PHP提供了 

gzcompress() 和gzuncompress() 函数

mbstring扩展库用于处理多字节字符串,对PHP来说很重要的.
要获得以UTF-8编码的字符串的正确长度,必须使用mb_strlen($string, 'UTF-8'),而不是

strlen($string).

在某个项目中需要分析 PHP 代码，分离出对应的函数调用（以及源代码对应的位置）。虽

然这使用正则也可以实现，但无论从效率还是代码复杂度方面考虑，这都不是最优的方式。
查询了 PHP 手册，发现其实 PHP 已经内置解析器的接口，那就是 PHP Tokenizer ，这工

具正是我想要的。使用 PHP Tokenizer 能简单、高效、准确的分析出 PHP 源代码的组成。

中括号数组定义：$array1 = [[1,2,3],[1,2,3]];

************************
__invoke()

mixed __invoke ([ $... ] )
当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用。
***************************

HTTP请求方法
根据HTTP标准，HTTP请求可以使用多种请求方法。
HTTP1.0定义了三种请求方法： GET, POST 和 HEAD方法。
HTTP1.1新增了五种请求方法：OPTIONS, PUT, DELETE, TRACE 和 CONNECT 方法。
序号	方法	描述
1	GET	请求指定的页面信息，并返回实体主体。
2	HEAD	类似于get请求，只不过返回的响应中没有具体的内容，用于获取报头
3	POST	向指定资源提交数据进行处理请求（例如提交表单或者上传文件）。数据

被包含在请求体中。POST请求可能会导致新的资源的建立和/或已有资源的修改。
4	PUT	从客户端向服务器传送的数据取代指定的文档的内容。
5	DELETE	请求服务器删除指定的页面。
6	CONNECT	HTTP/1.1协议中预留给能够将连接改为管道方式的代理服务器。
7	OPTIONS	允许客户端查看服务器的性能。
8	TRACE	回显服务器收到的请求，主要用于测试或诊断。

查看网页头信息---浏览器调试-网络-all，选中文件，点击。

function testClosure(Closure $callback)
{
    return $callback(13);
}

php函数名、方法名、类名不区分大小写,魔术方法不区分大小写

Closure::bind — 复制一个闭包，绑定指定的$this对象和类作用域。与
Closure::bindTo — 复制当前闭包对象，绑定指定的$this对象和类作用域。作用相似

例如：$b = Closure::bind($f, new B , 'B');
********************
可以以closure为参数：
$f=function($request){
    return $request+=100;
};

function handle(Closure $next,$request)
{
    return $next($request);
}

$m=handle($f,2);
echo "处理结果为：".$m;
*************
在类内部可以使用static访问静态属性和静态方法；例如：
class B1 {

   static   $base = 1000;


    public static function get()
    {
        return static::$base;
    }

    public static function set(){

        return static::get();
    }

}
***********
 魔术方法：
在对象中调用一个不可访问方法时，__call() 会被调用。

在静态上下文中调用一个不可访问方法时，__callStatic() 会被调用。
*****************——————————
...$args传递多个参数---
public static function get(...$grgs)
    {
//        return static::$base;
        print_r($grgs);
    }
——————————————————————————————
——————————————————————————
php禁止浏览器使用缓存页面的方法：

// 设置此页面的过期时间(用格林威治时间表示)，只要是已经过去的日期即可。 
header ( " Expires: Mon, 26 Jul 1970 05:00:00 GMT " );
  // 设置此页面的最后更新日期(用格林威治时间表示)为当天，可以强制浏览器获取最新

资料
header ( " Last-Modified:" . gmdate ( " D, d M Y H:i:s " ). "GMT " );
  
 // 告诉客户端浏览器不使用缓存，HTTP 1.1 协议
 header ( " Cache-Control: no-cache, must-revalidate " );
  
  // 告诉客户端浏览器不使用缓存，兼容HTTP 1.0 协议
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
————————————————————

————————————————————
导入类--use 命名空间+类名/
导入函数--use func,例如：use func Namespace\functionName
导入常量--可以使用use constant：例如use constant Namespace\CONST_NAME;

全局命名空间

如果引用的类、接口、函数和常量没有指定命名空间，PHP假定引用的类、接口、函数和常

量在当前的命名空间中。如果要使用其他命名空间的类、接口、函数或常量，需要使用完全

限定的PHP类名（命名空间+类名）。

有些代码在全局命名空间中，没有命名空间，比如原生的Exception类就是这样。在命名空

间中引用全局的代码时，需要在类、接口、函数或常量前加\符号：

<?php
namespace My\App;

class Foo {
    public function doSomething() {
        throw new \Exception();
    }
}

——————————————————
PSR-7 定义了一套标准，来标准化使用PHP来进行HTTP通信，替换PHP本身提供的那些超全局

变量，因为他们略显拙劣。

array_replace() 函数使用后面数组元素相同 key 的值替换 array1 数组的值。

parse_url()本函数解析一个 URL 并返回一个关联数组，包含在 URL 中出现的各种组成部

分。

http_build_query — 生成 URL-encode 之后的请求字符串,例如：

foo=bar&baz=boom&cow=milk&php=hypertext+processor

——————————————————————
$a = htmlentities($orig);

$b = html_entity_decode($a);

str_split — 将字符串转换为数组
array_map — 为数组的每个元素应用回调函数
————————————————————
array_multisort — 对多个数组或多维数组进行排序
rawurldecode() - 对已编码的 URL 字符串进行解码
urldecode() - 解码已编码的 URL 字符串
urlencode() - 编码 URL 字符串
get_parent_class — 返回对象或类的父类名
————————————————————
创建trait :trait 名称{代码块}

这里还需要声明的一点是调用方法的优先级：调用类>Trait>父类（如果有的话），方法可

以覆盖，但属性不行，如果Trait中定义了一个属性，如果调用类中也定义这个属性则会报

错。
__TRAIT__返回 trait name

我们能使用 insteadof 以及 as 操作符解决 Trait 之间的冲突

调用trait方法
虽然不很明显，但是如果Trait的方法可以被定义为在普通类的静态方法，就可以被调用

定义命名空间的trait，也需要use关键字导入

实例如下

复制代码
<?php 
trait Foo { 
    function bar() { 
        return 'baz'; 
    } 
} 

echo Foo::bar(),"\\n"; 
?>
————————————
array_keys — 返回数组中部分的或所有的键名
array_values — 返回数组中所有的值

在PHP5中，接口是可以继承自另外一个接口的。这样代码的重用更有效了。要注意只有接口

和接口之间使用 继承关键字 extends

 
 !== PHP 数组运算符，不恒等

echo App\Http\Kernel::class语法：导入命名空间App\Http下的包含类名为kernel的

kernel.php文件，输出为字符串

text/html的意思是将文件的content-type设置为text/html的形式，浏览器在获取到这种文

件时会自动调用html的解析器对文件进行相应的处理。

text/plain的意思是将文件设置为纯文本的形式，浏览器在获取到这种文件时并不会对其进

行处理。

如果你要检查一个变量是否存在，请使用 isset()。 defined() 函数仅对 constants 有效

。如果你要检测一个函数是否存在，使用 function_exists()。

例如：define('YII_ENV_TEST', YII_ENV === 'test');
——————————————————————
——————————
协议版本：HTTP/1.1、 HTTP/1.0 协议
————————————
defined() — 检查某个名称的常量是否存在
self调用const类常量

1.非限定名称，或不包含前缀的类名称，例如 $comment = new Comment();。如果当前命名

空间是Blog\Article，Comment将被解析为Blog\Article\Comment。如果使用Comment的代码

不包含在任何命名空间中的代码（全局空间中），则Comment会被解析为Comment。

2.限定名称，或包含前缀的名称，例如 $comment = new Article\Comment();。如果当前的

命名空间是Blog，则Comment会被解析为Blog\Article\Comment。如果使用Comment的代码不

包含在任何命名空间中的代码（全局空间中），则Comment会被解析为Comment。

3.完全限定名称，或包含了全局前缀操作符的名称，例如 $comment = new \Article

\Comment();。在这种情况下，Comment总是被解析为代码中的文字名(literal name)

Article\Comment。
 

其实可以把这三种名称类比为文件名（例如 comment.php）、相对路径名（例如 

./article/comment.php）、绝对路径名（例如 /blog/article/comment.php），这样可能

会更容易理解。

命名空间\yii\site--第一个杠，完全限定名称

 PHP 方法名是不区分大小写的


匿名函数（闭包函数）是一个独立的命名空间，你不能访问这个命名空间之外的变量，使用

use关键字可以把外部的变量 带到这个命名空间中。可以通过使用 & 符号来声明指针变量

。

匿名函数不会自动从父作用域中继承变量，注意从父作用域继承变量和使用全局变量是不同

的。如果父作用域本身就是全局的 情况下就不存在从父作用域继承变量了，如果不是全局

的话，想要使用父作用域中的变量，必须在声明匿名函数时候使用use换键字 来定义继承父

作用域的变量。

使用依赖注入的思路是应用程序用到Foo类，Foo类需要Bar类，Bar类需要Bim类，那么先创

建Bim类，再创建Bar类并把Bim注入，再创建Foo类，并把Bar类注入，再调用Foo方法，Foo

调用Bar方法，接着做些其它工作。

类当中使用new static()/new self()，代表调用此类构造函数

可以把在类中始终保持不变的值定义为常量。在定义和使用常量的时候不需要使用 $ 符号

。

类调用静态属性，需要加$符号---MyClass::$b;

由于静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用。$this-

只能在方法中使用。

类属性--定义需要添加访问修饰符，或者var定义，默认为public
 
 
callable 类型指定回调类型 callback

compact() 在当前的符号表中查找该变量名并将它添加到输出的数组中，变量名成为键名而变量的内容成为该键的值。简单说，它做的事和 extract() 正好相反。返回将所有变量添加进去后的数组。


booll  ctype_alnum（）

(PHP 4 >= 4.0.4, PHP 5, PHP 7)
ctype_alnum — 做字母和数字字符检测,检查提供的string,text 是否全部为字母和(或)数字字符。
————————————————————————————————————————
ucwords

(PHP 4, PHP 5, PHP 7)
ucwords — 将字符串中每个单词的首字母转换为大写

SplFileObject类为文件提供了一个面向对象接口.

fgetcsv — 从文件指针中读入一行并解析 CSV 字段


方法重载简化参数写法
【
public function init(){
    {
        parent::init();}
】

crypt（参数1，参数2）函数用法--参数1被加密字符串，参数2加密字符--单向字符串散列

sleep()延迟执行

Cache-Control: no-cache：这个很容易让人产生误解，使人误以为是响应不被缓存。实际上Cache-Control: no-cache是会被缓存的，只不过每次在向客户端（浏览器）提供响应数据时，缓存都要向服务器评估缓存响应的有效性。 



Cache-Control: no-store：这个才是响应不被缓存的意思。

session_cache_limiter() — 读取/设置缓存限制器(设置客户端Cache-Control 头信息)
——————————————————————————————————
restful风格--用来构建web service系统的原则
REST是一种设计风格而不是标准，如果一个架构符合REST原则，我们就称它为RESTful架构。

ii 提供了一整套用来简化实现 RESTful 风格的 Web Service 服务的 API。 

HATEOAS,缩写为超媒体应用程序状态的引擎,是一个REST应用程序体系结构的约束

你可以使用 yii\rest\UrlRule 简化路由到你的 API 末端。
——————————————————————————————
格式化日期：面向对象风格

<?php
$date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
echo $date->format('Y-m-d');
?>
过程化风格

<?php
$date = date_create_from_format('j-M-Y', '15-Feb-2009');
echo date_format($date, 'Y-m-d');
?>
————————————————————
array_merge() 将一个或多个数组的单元合并起来，一个数组中的值附加在前一个数组的后面。返回作为结果的数组。

如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。

icu扩展安装

foreach as

js --for in

php datetimezone--一般设置为上海Asia/Shanghai

ReflectionClass 类报告了一个类的有关信息。通过其构造方法 生成对象调用getFileName()返回类定义的文件名。

realpath

(PHP 4, PHP 5, PHP 7)
realpath — 返回规范化的绝对路径名

DIRECTORY_SEPARATOR是一个PHP常量，代表反斜杠

dirname(__DIR__)返回当前目录的上级目录

ReflectionClass::newInstanceArgs — 从给出的参数创建一个新的类实例。利用反射类创建类实例。
 
 php <?= 内容 ?>等价于<?php echo 内容 ?>

ＰＥＡＲ是ＰＨＰ扩展与应用库（the PHP Extension and Application Repository）的缩

写。它是一个ＰＨＰ扩展及应用的一个代码仓库，简单地说，ＰＥＡＲ就是ＰＨＰ的ＣＰＡ

Ｎ。

ArrayObject-This class allows objects to work as arrays.

【session需要开启，。默认存储在服务器tmp目录下】


逻辑运算符
例子	名称	结果
$a and $b	And（逻辑与）	TRUE，如果 $a 和 $b 都为 TRUE。
$a or $b	Or（逻辑或）	TRUE，如果 $a 或 $b 任一为 TRUE。
$a xor $b	Xor（逻辑异或）	TRUE，如果 $a 或 $b 任一为 TRUE，但不同时是。
! $a	Not（逻辑非）	TRUE，如果 $a 不为 TRUE。
$a && $b	And（逻辑与）	TRUE，如果 $a 和 $b 都为 TRUE。
$a || $b	Or（逻辑或）	TRUE，如果 $a 或 $b 任一为 TRUE。
“与”和“或”有两种不同形式运算符的原因是它们运算的优先级不同（见运算符优先级）

。

数据库事务4中指定隔离级别

实现了Iterator 接口的对象，可以用在 foreach 结构当中使用。

compact

(PHP 4, PHP 5, PHP 7)
compact — 建立一个数组，包括变量名和它们的值

说明

————————————————————————————
什么是RESTful风格的API
对于各种客户端设备与服务端的通信，我们往往都通过API为客户端提供数据，提供某种资

源。关于RESTful的概念，一查一大推，一两句也解释不清，姑且先按照我们通俗的理解：

在众多风格、众多原则的API中，RESTful就是一套比较优秀的接口调用方式。可以理解为其

他网站通过ＡＰＩ可以调用本网站资源，例如天气信息。
 


【任务标记：

TODO -用来提醒该标识处的代码有待返回继续编写、更新或者添加。该标签通常在注释块的

源文件顶部。

FIXME -该标签用来提醒你代码中存在稍后某个时间需要修改的部分

XXX -需要改进的功能】


【无状态请求：Server不保存任何请求状态信息，Client的每一个请求都具有User 

credentials等所需要的全部信息，所以能被任意可用的Server应答。 

有状态请求：Server保存了Client的请求状态，Server会通过Client传递的SessionID在

Server中的Session作用域找到之前交互的信息，并以此来实现应答。所以Client只能由某

一个Server来应答。】

strtotime（） — 将任何英文文本的日期时间描述解析为 Unix 时间戳，利用date()格式

化时间戳。

截取字符串substr()

PHP默认的时区设置是 UTC 时间，而北京正好位于时区的东八区，领先 UTC 八个小时。


cookie的存活期：默认为-1

上传图片重命名用时间戳time()

references 翻译为:引用

注意：类方法使用类属性，不要忘了用$this关键字访问

【变量t数组赋值：例如

class t{
/**
 *
 * 
 */

public $t;
public function t2(){
$this->t['t2']=123;
}

}
$k=new t();
$k->t2();
var_dump($k->t);
】
         会话Cookie：把Cookie保存到浏览器上，当存活期为负数  
         持久Cookie：把Cookie保存到文件中，当存活期为正数  
         设置存活期：c.setMaxAge();


array_combine（） — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为

其值

——————————————————————
get_class（）

(PHP 4, PHP 5, PHP 7)
get_class — 返回对象的类名

【接口使用关键字 interface 来定义，并使用关键字 implements 来实现接口中的方法，

且必须完全实现。
例子：
<?php
//定义接口
interface User{
    function getDiscount();
    function getUserType();
}
//VIP用户 接口实现
class VipUser implements User{
    // VIP 用户折扣系数
    private $discount = 0.8;
    function getDiscount() {
        return $this->discount;
    }
    function getUserType() {
        return "VIP用户";
    }
}
class Goods{
    var $price = 100;
    var $vc;
    //定义 User 接口类型参数，这时并不知道是什么用户
    function run(User $vc){
        $this->vc = $vc;
        $discount = $this->vc->getDiscount();
	$usertype = $this->vc->getUserType();
        echo $usertype."商品价格：".$this->price*$discount;
    }
}

$display = new Goods();
$display ->run(new VipUser);	//可以是更多其他用户类型
?>
运行该例子，输出：
VIP用户商品价格：80 元 
该例子演示了一个 PHP 接口的简单应用。该例子中，User 接口实现用户的折扣，而在 

VipUser 类里面实现了具体的折扣系数。最后商品类 Goods 根据 User 接口来实现不同的

用户报价。】

【服务定位器模式---例如

<?php

namespace DesignPatterns\More\ServiceLocator;

class ServiceLocator implements ServiceLocatorInterface
{
    /**
     * All services.
     *
     * @var array
     */
    private $services;

    /**
     * The services which have an instance.
     *
     * @var array
     */
    private $instantiated;

    /**
     * True if a service can be shared.
     *
     * @var array
     */
    private $shared;

    public function __construct()
    {
        $this->services     = array();
        $this->instantiated = array();
        $this->shared       = array();
    }

    /**
     * Registers a service with specific interface.
     *
     * @param string $interface
     * @param string|object $service
     * @param bool $share
     */
    public function add($interface, $service, $share = true)
    {
        /**
         * When you add a service, you should register it
         * with its interface or with a string that you can use
         * in the future even if you will change the service implementation.
         */

        if (is_object($service) && $share) {
            $this->instantiated[$interface] = $service;
        }
        $this->services[$interface] = (is_object($service) ? get_class($service) 

: $service);
        $this->shared[$interface]   = $share;
    }

    /**
     * Checks if a service is registered.
     *
     * @param string $interface
     *
     * @return bool
     */
    public function has($interface)
    {
        return (isset($this->services[$interface]) || isset($this->instantiated

[$interface]));
    }

    /**
     * Gets the service registered for the interface.
     *
     * @param string $interface
     *
     * @return mixed
     */
    public function get($interface)
    {
        // Retrieves the instance if it exists and it is shared
        if (isset($this->instantiated[$interface]) && $this->shared[$interface]) 

{
            return $this->instantiated[$interface];
        }

        // otherwise gets the service registered.
        $service = $this->services[$interface];

        // You should check if the service class exists and
        // the class is instantiable.

        // This example is a simple implementation, but
        // when you create a service, you can decide
        // if $service is a factory or a class.
        // By registering a factory you can create your services
        // using the DependencyInjection pattern.

        // ...

        // Creates the service object
        $object = new $service();

        // and saves it if the service must be shared.
        if ($this->shared[$interface]) {
            $this->instantiated[$interface] = $object;
        }
        return $object;
    }
}
】
