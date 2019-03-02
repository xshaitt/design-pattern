<?php
define('BASEDIR', __DIR__);
//定义基础目录
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\IMooc\Loader::autoload');
//注册自动引入方法
//IMooc\Object::test();
//\App\Controller\Home\Index::test();
//调用未包含的方法

echo \IMooc\Factory::createDatabase();
//使用工厂模式创建类
