<?php
	/**
	*
	*/
	class ShowVerifyCtrl extends Ctrl {

		function __construct() {
			parent::__construct();
			$this->Verifty = $this->component('VerifyCode');
		}
		public function index() {
			$this->Verifty->verifyImage(1, 4, 0, 0);
	    }
	}