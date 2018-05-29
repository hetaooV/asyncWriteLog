<?php 
namespace hetaoo\Src;


class ServerCoreShutdownEvent
{
	private static $_events = [];


    //
	public static function register()
	{
		register_shutdown_function(['\ServerCoreShutdownEvent', 'call']);
	}


	public static function add()
	{
		$event = func_get_args();

		if ( empty($event) ) {
            trigger_error("Register event need method.");
            return false;
        }

        if ( ! is_callable($event[0]) ) {
            trigger_error("Register event can not be call.");
            return false;
        }
        self::$_events[] = $event;
        return true;
	}

	/**
     * call event when you need.
     */
    public static function call() {
        foreach (self::$_events as $event) {
            $callback = array_shift($event);
            // var_dump($callback);

            call_user_func_array($callback, $event);
        }
    }
}
