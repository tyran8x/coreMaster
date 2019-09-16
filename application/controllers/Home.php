<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Home page
 */
class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('tintuc/Content_model');
		$this->load->model('gioithieu/GioiThieu_model');
	}


	function index()
	{
		//  $data = new stdClass();
		//	$data = (object) $this->Group_model->listall();
		//  $data['post'] = (object) $this->Group_model->listall();
		//	var_dump($data );
		$this->render('home', 'full_width');
	}
}
