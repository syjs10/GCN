<?php 

	/**
	* 管理员类
	*/
	class RootCtrl extends Ctrl {
		
		function __construct() {
			parent::__construct();
			$this->Input = $this->library('Input');
			$this->StudentModel = $this->loadModel('Student');
			$this->DepartmentModel = $this->loadModel('Department');
			$this->ReviewModel = $this->loadModel('Review');
			$this->Session = $this->library('Session');
			$this->Cookie = $this->library('Cookie');
		}
		public function index() {
			if (NULL == $this->Session->getSession('rootName') && NULL == $this->Cookie->getCookie('rootLogin')) {
				$this->jump(BASE_URL . 'Root/login');
				exit();
			}
			$name = $this->Session->getSession('rootName');
			$this->view->assign('name', $name);
			$this->view->display('root.html');
		}
		
		public function login() {
			$this->view->display('rootlogin.html');
		}
		public function doLogin(){
			if($this->Session->getSession('verify') == strtolower($this->Input->post('verify'))){
				$data = $this->Input->post();
				unset($data['verify']);
				$data['password'] = sha1($data['password']);
				$res = $this->DepartmentModel->loginMatch($data);
				if (NULL != $res) {
					if ($res[0]['username'] != 'root') {
						$this->alert('权限不够');
						$this->jumps(BASE_URL . 'Root/login');
						exit();
					}
					$this->Session->setSession('rootName', $res[0]['name']);
					$this->Session->setSession('rootUsername', $data['username']);
					$this->Cookie->setCookie('rootLogin', $data['username'], 3600*24);
					$Log = $this->library('Log');
					$Log->putLog($res[0]['username'] . " => login ", 'login');
					$this->jump(BASE_URL . 'Root');

				} else {
					$this->alert('用户名或密码错误');
					$this->back();
				}
			} else {
				$this->alert('验证码错误');
				$this->back();
			}
		}
		public function logout(){
			if (NULL != $this->Session->getSession('rootName') || NULL != $this->Cookie->getCookie('rootLogin')) {
				$this->Session->delSession();
				$this->Cookie->delCookie('rootLogin', 3600*24);
				$this->jump(BASE_URL . 'Root/login');
				exit();
			}
		}
		public function conflictStu($page = 1) {
			$name = $this->Session->getSession('rootName');
			$data = $this->StudentModel->rootChooseStu();
			$datas = array();
			foreach ($data as $value) {
				$i = 0;
				if ($value['employ_department']==null) {
					$i++;
				}
				if ($value['employ_department1']==null) {
					$i++;
				}
				if ($value['employ_department2']==null) {
					$i++;
				}
				if ($value['employ_department3']==null) {
					$i++;
				}
				if ($i != 3) {
					array_push($datas, $value);
				}
			}
			$num = PAGE_NUM;
			$pageNum = (int) ceil((count($datas) / $num));
			$pageNum = $pageNum  == 0 ? 1 : $pageNum;
			$this->view->assign('num', $pageNum);
			$this->view->assign('nextPage', ($page+1) >= $pageNum ? $pageNum : $page + 1);
			$this->view->assign('prePage', ($page-1) <= 0 ? 1 : $page - 1);
			$data = array_slice($datas,($page - 1) * $num, $num);
			$this->view->assign('name', $name);
			$this->view->assign('data', $data);
			$this->view->display('rootConflictStu.html');
		}
		public function setDep($id, $depName) {
			$res = $this->StudentModel->updateDep($id, $depName);
			$res && $this->jumps(BASE_URL . "Root/conflictStu");
		}
	}