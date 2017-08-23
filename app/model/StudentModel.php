<?php 
	/**
	* 学生模型
	*/
	class StudentModel extends Model {
		protected $table = 'student';
		function __construct() {
			parent::__construct();
		}
		public function insertAll($data) {
			return $this->insert($this->table, $data);
		}
		public function getAll() {
			return $this->select($this->table, '*');
		}
		public function getStudent($page, $num) {
			return $this->getByPage($this->table, $page, $num);
		}
		public function getStuById($id) {
			return $this->select($this->table, '*', [
				'id'=>$id
			]);
		}
		public function getCount($where = NULL) {
			return $this->count($this->table, '*', $where);
		}
		public function getPage($num) {
			return ceil(self::getCount() / $num);
		}
		public function getStuByDep($page, $num, $depName){
			return $this->select($this->table, '*', [
				"OR" => [
					"department0" => $depName,
					"department1" => $depName,
					"department2" => $depName,
					"department3" => $depName
				],
				"ORDER" => ["id" => "DESC"],
				"LIMIT" => [($page - 1) * $num, $num]
			]);			
		}
		public function getStuByNum($depName, $phoneNum){
			return $this->select($this->table, '*', [
				"AND" => [
					"OR" => [
						"department0" => $depName,
						"department1" => $depName,
						"department2" => $depName,
						"department3" => $depName
					],
					"phonenum" => $phoneNum
				]
			]);			
		}
		public function StuNum($phoneNum){
			return $this->select($this->table, '*', [
					"phonenum" => $phoneNum
			]);			
		}
		public function getConutByDep($depName){
			return $this->count($this->table, [
				"OR" => [
					"department0" => $depName,
					"department1" => $depName,
					"department2" => $depName,
					"department3" => $depName
				]
			]);			
		}
		public function getPageByDep($num, $depName) {
			return ceil(self::getConutByDep($depName) / $num);
		}
		public function getStuByReview($page, $num, $depName) {
			return $this->select($this->table, [
					"[>]review"=>["id"=>"id"]
				], 
				'*', 
				[
					"review.department" => $depName,
					"ORDER" => ["review.score" => "DESC"],
					"LIMIT" => [($page - 1) * $num, $num]
				]);
		}
		public function getAllStuByReview($depName) {
			return $this->select($this->table, [
					"[>]review"=>["id"=>"id"]
				], 
				'*', 
				[
					"review.department" => $depName
				]);
		}
		public function getCountByReview($depName){
			return $this->count($this->table, [
					"[>]review"=>["id"=>"id"]
				], 
				'*',
				[
					"review.department" => $depName
				]);			
		}
		public function getPageByReview($num, $depName) {
			return ceil(self::getCountByReview($depName) / $num);
		}
		public function getStuWithReview($id, $depName) {
			return $this->select($this->table, [
					"[>]review"=>["id"=>"id"]
				], 
				'*', 
				[
					"review.department" => $depName,
					"student.id" => $id
				]);
		}
		public function updateEmp($id, $empDep, $depName){
			return $this->update($this->table, [$empDep => $depName], ['id' => $id]);
		}
		public function updateDep($id, $depName){
			return $this->update($this->table, [
				"employ_department" => $depName, 
				"employ_department1" => null, 
				"employ_department2" => null, 
				"employ_department3" => null
				], ['id' => $id]);
		}
		public function chooseStu($depName){
			return $data = $this->select($this->table, '*', [
				"OR" => [
					"employ_department" => $depName,
					"employ_department1" => $depName,
					"employ_department2" => $depName,
					"employ_department3" => $depName
				]
			]);
		}
		public function rootChooseStu(){
			return $data = $this->select($this->table, '*', [
				"OR" => [
					"employ_department[!]" => NULL,
					"employ_department1[!]" => NULL,
					"employ_department2[!]" => NULL,
					"employ_department3[!]" => NULL
				]
			]);
		}
	}