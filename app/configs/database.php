<?php
/**
 *  数据库配置设置 
 */

return array(
    'fetch' => PDO::FETCH_CLASS,
        
    // 默认使用的数据库连接，对应 connections数组里的key
    'default' => 'master',
    
    'connections' => array(
            'master' => array(
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'qsmvc',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ),
    ),
    
);