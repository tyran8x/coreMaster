<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class TuyenDung extends MY_Controller {

	public function index()
	{
		$this->render('menu/TuyenDung', 'full_width');
	}
}
