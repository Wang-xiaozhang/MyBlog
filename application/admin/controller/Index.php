<?php
namespace app\admin\controller;
use app\common\controller\AdminBaseController;

class Index extends AdminBaseController{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		return $this->adminTpl();
	}
}