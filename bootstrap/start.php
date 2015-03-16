<?php
	/**
	 *	框架启动文件 
	 */

	// 路径设置
	$paths = array(
		'app' => __DIR__.'/../app',
		'public' => __DIR__.'/../public',
		'base' => __DIR__.'/..',
		'storage' => __DIR__.'/../app/storage',
		'modules' => __DIR__.'/../app/modules',
		'configs' => __DIR__.'/../app/configs',
			
		'views' => __DIR__.'/../app/views',
		'controllers' => __DIR__.'/../app/controllers',
		'models' => __DIR__.'/../app/models',
	);
	
	// 载入必须文件
	require_once $paths['modules'] . '/framework/Session.php';
	require_once $paths['modules'] . '/framework/Configs.php';
	require_once $paths['modules'] . '/framework/Db.php';
	
	// 初始化session
	Qsmvc\Session::init();
	
	// 设置路径配置信息
	Qsmvc\Configs::set(array('paths' => $paths));
	
	
	