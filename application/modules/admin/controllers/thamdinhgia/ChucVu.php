<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChucVu extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_dm_chucvu');

		$crud->set_subject('Chức vụ');

		$crud->columns('ma', 'ten');

		$crud->display_as('ma','Mã');
        $crud->display_as('ten','Tên ');

        

		$this->mPageTitle = 'Chức vụ';
		$this->render_crud();
	}

}
