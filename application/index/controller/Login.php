<?php
/**
 * Create By 慕白
 * Blog：www.php1314.cn
 * Date： 2020/8/17 15:34
 */
namespace app\index\controller;
class Login extends Base
{
    //用户注册功能
    public function RegisterWeb()
    {
        //do...
    }

    //用户登录
    public function LoginWeb()
    {
        dump('testsss');
    }
    //显示登录界面
    public function reglogin()
    {
        return $this->fetch('D7_register');
    }

    public function test()
    {
        $uId = input('?uid') ? input('uid') : '';
        if(!empty($uId))
        {
            return json(['msg'=>'参数缺失uid','code'=>'403']);
        }
        echo $uId;
        $a = 'hello';
        $$a = 'word';
        echo $hello;
echo "<pre>";
        $a = 10;
        $a .=5;
//        $a  = $a+5;
        echo $a;
    }


}