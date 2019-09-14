<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class NhanLuc extends MY_Controller {

	public function index()
	{
		$this->render('menu/NhanLuc', 'full_width');
	}
}
