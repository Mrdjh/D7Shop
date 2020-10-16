<?php
namespace app\index\controller;
class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function reglogin()
    {
        //渲染模板
        return $this->fetch('D7_register');
    }

}
