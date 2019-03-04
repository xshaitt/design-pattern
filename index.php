<?php
define('BASEDIR', __DIR__);
//定义基础目录
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\IMooc\Loader::autoload');
//注册自动引入方法
//IMooc\Object::test();
//\App\Controller\Home\Index::test();
//调用未包含的方法

//echo \IMooc\Factory::createDatabase();
//使用工厂模式创建类
//$reg = new \IMooc\Register();
//$reg->_set('db',\IMooc\Factory::createDatabase());
//注册对象，通常这一步都是放在初始化的环节
//$db = \IMooc\Register::get('db');
//echo $db;
echo 'xx';
$xx =  new \IMooc\Database\MySQLi();
echo $xx;