<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {
	function __construct() 
	{ 
		parent::__construct(); 
		$this->load->model('Api_key_model');

	} 
	public function index()
	{
		$data = new stdClass();
		$data = (object) $this->Api_key_model->listall();
		var_dump($data);
		$this->render('home', 'full_width');
	}
}
