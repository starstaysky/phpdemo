<?php
	class IndexController extends Yaf_Controller_Abstract{
		public function indexAction(){
			$this->_view->word = "hello world";
			//or
			//$this->getView()->word = "hello world";
		}
	}