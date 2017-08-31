<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
//	public $filepath;
	
    public function index(){
        $model = M("article");
        $count = $model->count();
        $this->assign("count", $count);
        $this->display();
    }

    public function left() {
        $column = I("get.column");
        $this->assign("column", $column);
        $this->display('index');
    }

    public function mian() {
        $main = I("get.main");
        $this->assign("main", $main);
        $this->display('index');
    }

    public function columninfo() {
        $model = M('column');
        $data = $model->select();
        $this->assign("data", $data);
        $this->display("columninfo");
    }

    public function addcolumn() {
        $model = M("column");
        if (!empty($_POST)) {
            $data['name'] = I("post.name");
            $data['orde'] = I("post.orde");
            $res = $model->data($data)->add();
            if ($res) {
                $this->success("添加栏目成功！", "/index.php/Home/Index/columninfo");
            }
        }
        $this->display("addcolumn");
    }

    public function editcolumn() {
        $model = M("column");
        if (IS_GET) {
            $id = I("get.id");
            $res = $model->where("id='$id'")->select();
            if ($res) {
                $this->assign("data", $res);
                $this->display("editcolumn");
            }
        }
        if (IS_POST) {
            $data['id'] = I("post.columnid");
            $data['name'] = I("post.name");
            $data['orde'] = I("post.orde");
            $res = $model->data($data)->save();
            if ($res) {
                $this->success("修改成功！", "/index.php/Home/Index/columninfo");
            }
        }
    }

    public function delcolumn() {
        $id = I("get.id");
        $model = M("column");
        $res = $model->where("id='$id'")->delete();
        if ($res) {
            $this->success("删除成功！");
        }
    }

    public function info() {
        $model = M("column");
        $data = $model->select();
        $this->ajaxReturn(array("status"=>true,"data"=>$data));
    }

    public function allNews(){
        $model = M("article");
        $data = $model->select();
        $this->ajaxReturn(array("success"=>true,"data"=>$data));
    }

    public function addNews(){
        $model = M("article");
        $data['title'] = I("post.title");
        $data['ftitle'] = I("post.ftitle");
        $data['sattr'] = I("post.sattr");
        $data['titlepic'] = I("post.titlepic");
        $data['context'] = I("post.context");
        $data['author'] = I("post.author");
        $data['content'] = I("post.content");
        $data['addtime'] = time();
        $res = $model->where("id=1")->data($data)->save();
        if ($res) {
            $this->success("添加成功");
        }
    }

    public function editNews(){
        $model = M("article");
        $id = I("post.id");
        $editdata = $model->where("id='$id'")->select();
        $this->ajaxReturn(array("success"=>true,"editdata"=>$editdata));
    }

    public function deleteNews(){
        $model = M("article");
        $id = I("get.id");
        $res = $model->where("id='$id'")->delete();
        if ($res) {
            $this->success("删除成功！");
        }
        $this->display("article");
    }
	
	public function upload(){
		$upload = new \Think\Upload();//  实例化上传类
		$upload->maxSize = 3145728 ;//  设置附件上传大小
		$upload->exts = array('jpg', 'gif', 'png', 'jpeg');//  设置附件上传类型
		$upload->savePath = '/Uploads/'; //  设置附件上传目录
		//  上传文件
		$info = $upload->upload();
		if(!$info) {//  上传错误提示错误信息
			$this->error($upload->getError());
		} else {//  上传成功
			foreach ($info as $value) {
				$this->filepath = "/Uploads".$value['savepath'].$value['savename'];
				$this->assign("filepath", $this->filepath);
			}
			$this->display('upload');
//			$this->success(' 上传成功！', '/app/Home/View/Index/upload.html');
		}
	}
}