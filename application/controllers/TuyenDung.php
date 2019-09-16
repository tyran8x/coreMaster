<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home page
 */
class TuyenDung extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tuyendung/TuyenDung_model');
		$this->load->model('gioithieu/GioiThieu_model');
	}


	
	public function index()
	{
		//	echo $this->input->get('id');
		if ($this->input->get('id') > 0) {
			$this->render('menu/XemChiTietTuyenDung', 'full_width');
		} else {
			$this->render('menu/TuyenDung', 'full_width');
		}
	}
}
