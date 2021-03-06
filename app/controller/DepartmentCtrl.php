<?php

	/**
	* 部门管理类
	*/
	class DepartmentCtrl extends Ctrl {

		function __construct() {
			parent::__construct();
			$this->Input = $this->library('Input');
			$this->DepartmentModel = $this->loadModel('Department');
			$this->StudentModel = $this->loadModel('Student');
			$this->ReviewModel = $this->loadModel('Review');
			$this->Session = $this->library('Session');
			$this->Cookie = $this->library('Cookie');

		}
		public function isLogin() {
			if (NULL == $this->Session->getSession('name') && NULL == $this->Cookie->getCookie('Login')) {
				$this->jump(BASE_URL . 'Department/login');
				exit();
			}
			if (NULL == $this->Session->getSession('name') && NULL != $this->Cookie->getCookie('Login')) {
				$this->Session->setSession('name', $this->Cookie->getCookie('Login'));

			}
		}
		public function index() {
			$this->isLogin();
			$name = $this->Session->getSession('name');
			$this->view->assign('name', $name);
			$this->view->display('departmentIndex.html');
		}
		public function login() {
			$this->view->display('login.html');
		}
		public function doLogin(){
			if($this->Session->getSession('verify') == strtolower($this->Input->post('verify'))){
				$data = $this->Input->post();
				unset($data['verify']);
				$data['password'] = sha1($data['password']);
				$res = $this->DepartmentModel->loginMatch($data);
				if (NULL != $res) {
					$this->Session->setSession('name', $res[0]['name']);
					$this->Session->setSession('username', $data['username']);
					$this->Cookie->setCookie('Login', $res[0]['name'], 3600*24);
					$Log = $this->library('Log');
					$Log->putLog($res[0]['username'] . " => login ", 'login');
					$this->jump(BASE_URL . 'Department');

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
			if (NULL != $this->Session->getSession('name') || NULL != $this->Cookie->getCookie('Login')) {
				$this->Session->delSession();
				$this->Cookie->delCookie('Login', 3600*24);
				$this->jump(BASE_URL . 'Department/login');
				exit();
			}
		}
		public function rePassword() {
			$this->isLogin();
			$this->view->display('rePwd.html');
		}
		public function doRePassword() {
			$password = $this->Input->post('password');
			$username = $this->Session->getSession('username');
			$res = $this->DepartmentModel->rePwd($username, $password);
			if ($res != NULL) {
				$this->alert('修改成功');
				$this->jumps(BASE_URL . 'Department/login');
			}
		}
		public function interview ($page=1) {
			$this->isLogin();
			$num = PAGE_NUM;
			$name = $this->Session->getSession('name');
			$pageNum = $this->StudentModel->getPageByDep($num, $name);
			$pageNum = $pageNum == 0 ? 1 : $pageNum;
			$data = $this->StudentModel->getStuByDep($page,$num,$name);
			$this->view->assign('num', $pageNum);
			$this->view->assign('nextPage', ($page+1) >= $pageNum ? $pageNum : $page + 1);
			$this->view->assign('prePage', ($page-1) <= 0 ? 1 : $page - 1);
			$this->view->assign('data', $data);
			$this->view->assign('name', $name);
			$this->view->display('interview.html');
		}
		public function findStuI(){
			$this->isLogin();
			$name = $this->Session->getSession('name');
			$phoneNum = $this->Input->post('phoneNum');
			$data = $this->StudentModel->getStuByNum($name,$phoneNum);
			$this->view->assign('num', 1);
			$this->view->assign('data', $data);
			$this->view->assign('name', $name);
			$this->view->display('interview.html');
		}
		public function choose($page=1) {
			$this->isLogin();
			$num = PAGE_NUM;
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->getStuByReview($page, $num, $name);
			$pageNum = $this->StudentModel->getPageByReview($num, $name);
			$pageNum = $pageNum == 0 ? 1 : $pageNum;
			$this->view->assign('num', $pageNum);
			$this->view->assign('nextPage', ($page+1) >= $pageNum ? $pageNum : $page + 1);
			$this->view->assign('prePage', ($page-1) <= 0 ? 1 : $page - 1);
			$this->view->assign('name', $name);
			$this->view->assign('data', $data);
			$this->view->display('choose.html');
		}
		public function putStuReview() {
			$this->isLogin();
			$data = $this->Input->post();
			$data['department'] = $this->Session->getSession('name');
			$res = $this->ReviewModel->putReview($data);
			if ($res) {
				$this->alert('评价提交成功');
				$this->jumps(BASE_URL."Department/interview/page/1");
			} else {
				$this->alert('已提交过评价');
				$this->jumps(BASE_URL."Department/interview/page/1");
			}
		}
		public function hiring($id) {
			$this->isLogin();
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->getStuById($id)[0];
			// dump($data);
			if ($data['employ_department'] != null && $data['employ_department'] != $name) {
				if ($data['employ_department1'] != null && $data['employ_department1'] != $name) {
					if ($data['employ_department2'] != null && $data['employ_department2'] != $name) {
						if ($data['employ_department3'] != null && $data['employ_department3'] != $name) {
							//update jump
							$this->StudentModel->updateEmp($id, 'employ_department3', $name);
							$this->alert('录取成功！');
							$this->back();
						}
					} else {
						//update jump
						$this->StudentModel->updateEmp($id, 'employ_department2', $name);
						$this->alert('录取成功！');
						$this->back();
					}
				} else {
					//update jump
					$this->StudentModel->updateEmp($id, 'employ_department1', $name);
					$this->alert('录取成功！');
					$this->back();

				}
			} else {
				//update jump
				$this->StudentModel->updateEmp($id, 'employ_department', $name);
				$this->alert('录取成功！');
				$this->back();
			}
		}
		public function unhiring($id) {
			$this->isLogin();
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->getStuById($id)[0];
			if ($data['employ_department'] == $name) {
				$this->StudentModel->updateEmp($id, 'employ_department', null);
				$this->alert('取消录取！');
				$this->back();
				exit();
			}
			if ($data['employ_department1'] == $name) {
				$this->StudentModel->updateEmp($id, 'employ_department1', null);
				$this->alert('取消录取！');
				$this->back();
				exit();
			}
			if ($data['employ_department2'] == $name) {
				$this->StudentModel->updateEmp($id, 'employ_department2', null);
				$this->alert('取消录取！');
				$this->back();
				exit();
			}
			if ($data['employ_department3'] == $name) {
				$this->StudentModel->updateEmp($id, 'employ_department3', null);
				$this->alert('取消录取！');
				$this->back();
				exit();
			}
			$this->alert('未录取');
			$this->back();

		}
		public function getConflictStu($page = 1){
			$this->isLogin();

			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->chooseStu($name);
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
				if ($i < 3) {
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
			$this->view->display('conflictStu.html');
		}
		public function getHiredStu($page = 1){
			$this->isLogin();
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->chooseStu($name);
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
				if ($i == 3) {
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
			$this->view->display('hiredStu.html');
		}
		public function getUnhiredStu($page = 1){
			$this->isLogin();
			$num = PAGE_NUM;
			$name = $this->Session->getSession('name');
			$datas = $this->StudentModel->getAllStuByReview($name);
			$data = array();
			foreach ($datas as $value) {
				if ($value['employ_department'] != $name &&
					$value['employ_department1'] != $name &&
					$value['employ_department2'] != $name &&
					$value['employ_department3'] != $name) {
					array_push($data, $value);
				}
			}
			$pageNum = (int) ceil(count($data) / $num);
			$pageNum = $pageNum == 0 ? 1 : $pageNum;
			$this->view->assign('num', $pageNum);
			$this->view->assign('nextPage', ($page+1) >= $pageNum ? $pageNum : $page + 1);
			$this->view->assign('prePage', ($page-1) <= 0 ? 1 : $page - 1);
			$data = array_slice($data, ($page - 1) * $num, $num);

			$this->view->assign('name', $name);
			$this->view->assign('data', $data);
			$this->view->display('unhiredStu.html');

		}
		public function getExcel(){
			$this->isLogin();
			$name = $this->Session->getSession('name');
			$data = $this->StudentModel->chooseStu($name);
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
				if ($i == 3) {
					array_push($datas, $value);
				}
			}
			$objPHPExcel = new PHPExcel();
			$fileName = "{$name}.xls";
			$objPHPExcel->setActiveSheetIndex(0)
            			->setCellValue('A1','学号')
			            ->setCellValue('B1','姓名')
			            ->setCellValue('C1','性别')
			            ->setCellValue('D1','班级')
			            ->setCellValue('E1','电话')
			            ->setCellValue('F1','QQ');

			//适合把表中数据导入Excel文件中，多数据循环设置值
			foreach($datas as $key=> $value) {
				$key+=2;
				$objPHPExcel->setActiveSheetIndex(0)
				           ->setCellValue('A'.$key,$value['studentid'])
				           ->setCellValue('B'.$key,$value['name'])
				           ->setCellValue('C'.$key,$value['gender'])
				           ->setCellValue('D'.$key,$value['class'])
				           ->setCellValue('E'.$key,$value['phonenum'])
				           ->setCellValue('F'.$key,$value['qqnum']);
			}
			// 设置活动单指数到第一个表,所以Excel打开这是第一个表
			$objPHPExcel->setActiveSheetIndex(0);
			// 将输出重定向到一个客户端web浏览器(Excel2007)
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename='.$fileName);
			header('Cache-Control: max-age=0');
			header("Content-Type:application/download");
			//要是输出为Excel2007,使用 Excel2007对应的类，生成的文件名为.xlsx.如果是Excel2005,使用Excel5,对应生成.xls文件
			// $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$objWriter->save('php://output');
		}
	}