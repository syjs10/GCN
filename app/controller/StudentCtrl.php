<?php 
	/**
	* 学生类
	*/
	class StudentCtrl extends Ctrl {
		
		function __construct() {
			parent::__construct();
			$this->Input = $this->library('Input');
			$this->StudentModel = $this->loadModel('Student');
			$this->Cookie = $this->library('Cookie');
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
					$data = $this->StudentModel->StuNum($this->Input->post('phonenum'));
					$datas = $data[0]['id'];
					$this->view->assign('message', "提交成功, 编号$datas");
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
			if (NULL == $this->Session->getSession('name') && NULL == $this->Cookie->getCookie('Login')) {
				$this->jump(BASE_URL . 'Department/login');
				exit();
			}
			$data = $this->StudentModel->getStuById($id)[0];
			$this->view->assign('data', $data);
			$this->Session = $this->library('Session');
			$name = $this->Session->getSession('name');
			$this->view->assign('name', $name);
			$this->view->display('stuInfo.html');
		}
		public function getStuInfoWithReview($id){
			if (NULL == $this->Session->getSession('name') && NULL == $this->Cookie->getCookie('Login')) {
				$this->jump(BASE_URL . 'Department/login');
				exit();
			}
			$this->Session = $this->library('Session');
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->getStuWithReview($id, $name)[0];
			$this->view->assign('data', $data);
			$this->view->assign('name', $name);
			$this->view->display('stuInfoWithReview.html');
		}
	}