<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;

class IndexController extends Controller {

    //显示用户登陆界面
    public function index(){
        //$this->show("hello world!");
        $user = M('User');
       // dump($user->find(1));
        $this->name=$user.name;
        $this->display('Index/index');
    }

    //处理用户登陆逻辑
    /*
     * $name : 用户提交的用户名
     * $passwd : 用户提交的密码
     *
     * 登陆成功之后，跳转到项目列表页面
     * */
    public function login() {
        $name = I('name');
        $passwd = I('passwd');
        $user = M('user');
        $where = array('name'=>$name, 'passwd'=>md5($passwd));
        $res = $user->where($where)->find();
        if(!$res){
            //如果没有找到用户
            $this->error('登陆失败', 'index');
        }else{
            //$this->redirect('New/category', array('cate_id' => 2), 5, '页面跳转中...');
            $this->success('登陆成功','/Home/Project/index');
        }
    }
}