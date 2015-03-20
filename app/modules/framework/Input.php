<?php
namespace Qsmvc;

class Input
{
    /**
     *  统一处理Post Get Cookies等输入数据 
     */
    
    
    /**
     *  获取$_POST数据
     *  @param string $key 键名
     *  @param mixed $defalut 没有对应数据，则返回该设置值
     */
    public static function post($key, $default = null)
    {
        if( isset($_POST[$key]) )
            return $_POST[$key];
        else
            return $default;
    }
    
    /**
     *  获取$_GET数据
     *  @param string $key 键名
     *  @param mixed $defalut 没有对应数据，则返回该设置值
     */
    public static function get($key, $default = null)
    {
        if( isset($_GET[$key]) )
            return $_GET[$key];
        else
            return $default;
    }
    
}