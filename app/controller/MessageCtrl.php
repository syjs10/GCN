<?php 
	/**
	* 信息类
	*/
	class MessageCtrl extends Ctrl {
		
		function __construct() {
			parent::__construct();
		}
		public function index() {
			$this->view->display('message.html');
		}
	}