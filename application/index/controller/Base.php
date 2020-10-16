<?php
namespace app\index\controller;
use think\Controller;
/**
 * Create By 慕白
 * Blog：www.php1314.cn
 * Date： 2020/8/8 16:11
 */
Class Base extends controller
{
    public function __construct()
    {
        //每次验证登录状态
        var_dump('Base类自动加载:后续做登录验证');
        echo "<hr>";
    }
}