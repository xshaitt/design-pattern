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
//$xx =  new \IMooc\Database\PDO();
//echo $xx;
//因为有对应的适配器，所以对于使用者来讲切换非常方便，扩展起来也很方便
//$page = new \IMooc\UserStrategyPage();
//if (isset($_GET['strategy']) && $_GET['strategy'] == 'male') {
//    $page->setStrategy(new \IMooc\MaleUserStrategy());
//} else {
//    $page->setStrategy(new \IMooc\FemaleUserStrategy());
//}
//$page->index();
//策略模式，所谓策略模式就是根据不同的环境以有不同的响应策略
//$mysql = new \IMooc\Database\MySQLii();
//$mysql->connect('172.19.0.1', 'default', 'secret', 'default');
//$users = $mysql->query("select * from user");
//var_dump($users);
//ORM对象数据映射
//$userModel = new \IMooc\Database\User(1);
//$userModel->mobile = '17091642340';
//var_dump($userModel->save());
//结合工厂，注册树模式的ORM
//$user = \IMooc\Factory::createUserModel(1);
//$user2 = \IMooc\Factory::createUserModel(1);
//$user与$user2为同一个对象
//$event = new \IMooc\Observer\Event();
//$event->addObserver(new \IMooc\Observer\ObserverEmail());
//$event->addObserver(new \IMooc\Observer\ObserverSMS());
//$event->trigger();
//迭代器模式
$users = new \IMooc\Iterator\AllUser();
foreach ($users as $user) {
    echo "{$user->name}</br>";
}

