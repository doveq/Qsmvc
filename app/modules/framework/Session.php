<?php
namespace Qsmvc;

class Session
{
	/**
	 * 全局操作$_SESSION数据
	 */
	
	/**
	 * 初始化 session
	 * @param String $id 设置指定的session id号(可选)
	 */
	public static function init($id = false)
	{
		if(!empty($id))
			session_id($id);
		
		session_start();
	}
	
	
	/**
	 * 获取session id
	 * @return String 
	 */
	public static function getSessionId()
	{
		return session_id();
	}
	
	
	/**
	 * 设置session信息
	 * @param String $key 设置session键
	 * @param mixed $val 设置session值
	 */
	public static function set($key, $val)
	{
		$_SESSION[$key] = $val;
	}
	
	/**
	 * 根据键获取session值
	 * @param string $key session键
	 * @reutnr mixed
	 */
	public static function get($key)
	{
		return $_SESSION[$key];
	}
	
	
	/**
	 * 删除指定的session值
	 * @param string $key session键
	 */
	public static function del($key)
	{
		unset($_SESSION[$key]);
	}
	
}