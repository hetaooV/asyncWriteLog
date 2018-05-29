<?php

namespace hetaoo\Src;

//写日志的类
class ServerCoreNetlog
{
	public static function trace($message)
	{
		$str = "Error ". date('Y-m-d',time()). "  " . $message . "   \r\n";

		file_put_contents('aaa.log', $str, FILE_APPEND);
	} 


}