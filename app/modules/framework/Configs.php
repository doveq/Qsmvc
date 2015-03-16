<?php
namespace Qsmvc;

class Configs
{
	/**
	 * 全局配置信息存取操作类
	 */
	
	// 保存配置信息
	protected static $configs = array();
	
	
	/**
	 * 设置配置信息
	 * @param array $config 配置
	 */
	public static function set($config)
	{
		// 合并配置数组
		$this->configs = array_replace_recursive($this->configs, $config);
	}
	
	/**
	 * 获取配置信息
	 * @param string $key 配置名字
	 * @reutnr mixed
	 */
	public static function get($key)
	{
		return $this->configs[$key];
	}
	
	
}