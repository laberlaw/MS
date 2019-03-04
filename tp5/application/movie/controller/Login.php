<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/2/25
 * Time: 18:14
 */
namespace app\movie\controller;
use think\Controller;
use think\Db;
use think\Request;

class login extends Controller
{
    public function login(){
        return view();
    }
    public function register(){
//        return $this->fetch('register');
        return view();
    }
    public function registercheck(){
        if (Request::instance()->isPost()) { //判断是否是是否为 POST 请求
            $data = input('post.');
//            {admin_name: "admin", password: "123456", captcha: "m4r"}
            $name = $data['account'];
            $password = md5($data['password']);
            $repossword = $data['re-possword'];
            $email = $data['email'];
            $tel = $data["tel"];
            $value=[
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'phone_number' => $tel,
            ];
            Db::name('user')->insert($value);
            return view();
        }
    }
}