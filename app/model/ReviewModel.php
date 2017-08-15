<?php  
	/**
	* 评价模型
	*/
	class ReviewModel extends Model {
		protected $table = "review";
		function __construct() {
			parent::__construct();
		}
		public function putReview($data){
			return $this->insert($this->table, $data);
		}
	}