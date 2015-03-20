<?php
namespace Qsmvc;

class Route
{
    /**
     *  URL路由处理
     */
    
    // 保存路由信息
    protected static $routes = array();
    
    #$_SERVER['REQUEST_METHOD']该变量中存储的是表单提交的方式
    
    /**
     *  设置post请求路由信息 
     *  @param string $url 设置url访问地址
     *  @param array $info 路由设置信息 
     */
    public static function post($url, $info)
    {
        
    }
    
    
    /**
     *  处理路由设置信息数据 
     *  @param array $info 路由设置信息
     *  @return
     */
    public static function processInfo($info)
    {
        
    }
}