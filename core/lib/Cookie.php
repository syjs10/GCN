<?php 
	/**
	* Cookie类
	*/
	class Cookie extends Common {
		
		function __construct() {
			parent::__construct();
		}
		/**
		 * 设置cookie
		 * @param  [String] $cookieName cookie名称
		 * @param  [String] $value      cookie值
		 * @param  [Int] $time          时间
		 * @return [type]             [description]
		 */
		public function setCookie($cookieName, $value, $time) {
			setcookie($cookieName, $value, time()+$time);
		}
		/**
		 * 获取cookie值
		 * @param  [String] $cookieName cookie名称
		 * @return [type]             [description]
		 */
		public function getCookie($cookieName) {
			return empty($_COOKIE[$cookieName]) ? null : $_COOKIE[$cookieName];
		}
		/**
		 * 删除cookie
		 * @param  [String] $cookieName cookie名称
		 * @param  [type] $time         时间
		 * @return [type]             [description]
		 */
		public function delCookie($cookieName, $time) {
			setcookie($cookieName, "", time()-$time);
		}
	}