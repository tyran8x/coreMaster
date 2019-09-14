<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class DuAn extends MY_Controller {

	public function index()
	{
		$this->render('menu/DuAn', 'full_width');
	}
}
