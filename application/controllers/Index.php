<?php
	class IndexController extends Yaf_Controller_Abstract{
		public function indexAction(){
			header('Content-Type:application/json');
			echo json_encode(
				[
					'errno' => 0,
					'errmsg' => '成功'
				]
			);
			exit;
			//$this->_view->word = "hello world";
			//or
			//$this->getView()->word = "hello world";
		}
	}