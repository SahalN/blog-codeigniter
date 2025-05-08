<?php

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['title'] = 'This is a title';
		$data['content'] = "this is The contents";
		$this->load->view('blog_view', $data);
	}
}
?>
