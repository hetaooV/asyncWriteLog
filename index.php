<?php 
namespace hetaoo\Src;


require "vendor/autoload.php";
use  hetaoo\Src\ServerCoreNetlog;
use  hetaoo\Src\ServerCoreShutdownEvent;

function test()
{
	\hetaoo\Src\ServerCoreShutdownEvent::register();
	\hetaoo\Src\ServerCoreShutdownEvent::add(['\ServerCoreNetlog', 'trace'], '这里是测试　注意这里是测试');
	
	\hetaoo\Src\ServerCoreNetlog::trace('这里是测试二');

	sleep(5);
	echo 'success';
}

test();


// $model = new \hetaoo\Src\Test();
// $model->index();