<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}


class Index extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {
		// if ($this->session->userdata('is_logged_in')) {
		// 	$this->add("user_name", $this->session->userdata('user_name'));
  //                       $this->load->library('rbac');
  //                       $menus = $this->rbac->getUserMenus();
  //                       $this->add("menus", $menus);
		// 	$this->display('index/index.html');
		// } else {
		// 	$this->display('login/index.html');
		// }
		$this->display('site_info/index.html');
	}
}