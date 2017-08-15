<?php 
	/**
	* 部门模型
	*/
	class DepartmentModel extends Model {
		protected $table="admin";
		function __construct() {
			parent::__construct();
		}
		/**
		 * 登录验证
		 * @return [type] [description]
		 */
		public function loginMatch($data) {
			return $this->select($this->table, '*', $data);
		}
		public function rePwd($username, $pwd){
			return $this->update($this->table, ['password' => sha1($pwd)], ["username"=>$username]);
		}
	}