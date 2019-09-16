<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Home page
 */
class LienHe extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('gioithieu/GioiThieu_model');
	}
	 
	public function index()
	{
		$this->render('menu/LienHe', 'full_width');
	}
}
