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

    public function allNews(){
        $model = M("article");
        $data = $model->selet();
        $this->assign("data", $data);
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