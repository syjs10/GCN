<?php 
	
	/**
	* 	默认控制器
	*/
	class IndexCtrl extends Ctrl{
		function __construct() {
			parent::__construct();	
		}
		public function index(){
			
			$this->view->display('index.html');
		}
	}
