<?php
namespace app\admin\controller;
use app\admin\common\controller\AdminBaseController;

class Login extends AdminBaseController {
	public function __construct(){
		parent::__construct(FALSE);
	}
	public function index(){
		return $this->fetch();
	}
	
	public function login(){
		if(IS_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username !='admin' || $password != 'admin'){
				$ret = ['code' => 0 , 'msg' => "账号或密码错误"];
				return json($ret);
			}
			session ('admin_uid',1);
			$ret = ['code' => 1 , 'msg' => ''];
			return json($ret);
		}
		
	}
	
	public function out(){
		session('admin_uid',NUll);
		$url = url("login/index");
		$this->redirect($url);
	}
	
}