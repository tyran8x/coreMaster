<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home page
 */
class NhanLuc extends MY_Controller
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('gioithieu/GioiThieu_model');
        $this->load->model('tintuc/Content_model');
	}
	 

	public function index()
	{
		$this->render('menu/NhanLuc', 'full_width');
	}
}
