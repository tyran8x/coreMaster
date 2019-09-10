<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MucDich extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_dm_mucdich');

		$crud->set_subject('Mục đích');

		$crud->columns('ma', 'ten');

		$crud->display_as('ma','Mã');
        $crud->display_as('ten','Tên ');

        

		$this->mPageTitle = 'Mục đích';
		$this->render_crud();
	}

}
