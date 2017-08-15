<?php 
	/**
	* 学生类
	*/
	class StudentCtrl extends Ctrl {
		
		function __construct() {
			parent::__construct();
			$this->Input = $this->library('Input');
			$this->StudentModel = $this->loadModel('Student');
			$this->Session = $this->library('Session');
		}
		public function index() {
			$this->view->display('stuSubmit.html');
			
		}
		public function doSubmit() {
			if($this->Session->getSession('verify') == ($this->Input->post('verify'))){
				unset($_POST['verify']);
				$res = $this->StudentModel->insertAll($this->Input->post());
				if ($res == true) {
					$this->view->assign('message', "提交成功");
					$this->view->display('message.html');
				} else {
					$this->view->assign('message', "提交失败");
					$this->view->display('message.html');
				}
			} else {
				$this->alert('验证码错误');
				$this->back();
			}
		}
		public function getStuInfo($id){
			$data = $this->StudentModel->getStuById($id)[0];
			$this->view->assign('data', $data);
			$this->Session = $this->library('Session');
			$name = $this->Session->getSession('name');
			$this->view->assign('name', $name);
			$this->view->display('stuInfo.html');
		}
		public function getStuInfoWithReview($id){
			
			$this->Session = $this->library('Session');
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->getStuWithReview($id, $name)[0];
			$this->view->assign('data', $data);
			$this->view->assign('name', $name);
			$this->view->display('stuInfoWithReview.html');
		}
	}