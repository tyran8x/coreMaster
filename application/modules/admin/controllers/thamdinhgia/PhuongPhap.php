<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhuongPhap extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_dm_phuongphap');

		$crud->set_subject('Phương pháp');

		$crud->columns('ma', 'ten');

		$crud->display_as('ma','Mã');
        $crud->display_as('ten','Tên ');

        

		$this->mPageTitle = 'Phương pháp';
		$this->render_crud();
	}

}
