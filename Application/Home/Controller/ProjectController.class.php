<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;

class ProjectController extends Controller {

    //列出所有项目
    public function index(){
        $project = M('Project');
        $list = $project->select();
        $this->list = $list;
        $this->display();
    }

    /*
     * 添加项目
     *
     * */
    public function add(){
        $this->display();
    }

    /*
     * 处理用户提交的项目详情，并存入数据库
     *
     *
     * */
    public function doAdd() {

        $project = M('Project');
        $data = $project->create();

        $res = $project->add($data);
        if ($res){
            $this->success('添加成功', 'index');
        }else{
            $this->error('添加失败，请联系管理员');
        }
    }

    /*
     * 单个项目详情，包括：
     * 项目名称
     * 项目编号
     * 该项目漏洞列表
     *
     * */
    public function showDetails() {

        $id = I('id');

        //获取项目信息
        $proj = M('Project');
        $condition['id'] = $id;
        $details = $proj->where($condition)->select();

        $this->details = $details;

        //获取漏洞信息
        $vuls = D('Vuls');
        $condition2['projid'] = $id;
        //$vulslist = $vuls->where($condition2)->select();

        $vulslist = $vuls->relation(True)->where($condition2)->select();
        //$vulslist = $vuls->relation(True)->find();
        print_r($vulslist);

        //$this->vlist = $vulslist;
        $this->assign('vlist',$vulslist);

        //显示
        $this->display();
    }

    /*
     * 删除漏洞
     * 传入参数：id，对应Vuls表ID字段
     * */
    public function doDelete() {

        $vuls = M('Project');
        $condition = array('id'=>I('id'));
        $res = $vuls->where($condition)->delete();

        if($res){
            $this->success('删除成功');
        }else{
            $this->error('删除失败，请联系管理员');
        }

    }

    /*
     * 修改漏洞
     * */
    public function doEdit() {
        echo "doEdit function";
    }

}