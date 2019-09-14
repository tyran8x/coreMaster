<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function index()
	{
	//	$this->load->model('Content_model');
		$data= $this->Content_model->getListAll();
		echo $data;
	
		$this->render('Home', 'full_width');
	}
}
