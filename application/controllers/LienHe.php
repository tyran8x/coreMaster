<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class LienHe extends MY_Controller {

	public function index()
	{
		$this->render('menu/LienHe', 'full_width');
	}
}
