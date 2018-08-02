<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;


class VulsController extends Controller {

    /*
     * 显示填写漏洞的页面
     * 取出所有项目，生成select表，供用户选择
     * 取出所有漏洞分类表，以供用户选择
     * */
    public function show() {
        $project = M('Project');
        $plist = $project->select();
        $this->plist = $plist;

        $vuls = M('Groups');
        $vlist = $vuls->select();
        $this->vlist = $vlist;

        $this->display();
    }

    /*
     * 添加漏洞
     *
     * */
    public function doAdd() {

        $vuls = M('Vuls');
        $data = $vuls->create();

        $res = $vuls->add($data);
        if ($res){
            $this->success('添加成功','/Home/Project');
        }else{
            $this->error('添加失败，请联系管理员','/Home/Project');
        }
    }

    /*
     * 删除漏洞
     * 传入参数：id，对应Vuls表ID字段
     * */
    public function doDelete() {

        $vuls = M('Vuls');
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

?>