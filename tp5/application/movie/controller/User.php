<?php
/**
 * Created by PhpStorm.
 * User: win
 * Date: 2019/2/23
 * Time: 20:45
 */
namespace app\movie\controller;

use think\Controller;

class User extends Controller {
    public function add(){
        return $this->fetch('addUser');
    }
}
?>