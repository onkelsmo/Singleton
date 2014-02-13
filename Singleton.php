<?php
/**
*
* Singleton class
*
* @author SmO
* @since 13.02.2014
*
**/
class Singleton
{
	private static $instance = null;
	
	public static function getInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new Singleton();
		}
		return self::$instance;
	}
	
	// prevent construction and cloning because of Singleton Pattern
	protected function __construct(){}
	private function __clone(){}
}
?>