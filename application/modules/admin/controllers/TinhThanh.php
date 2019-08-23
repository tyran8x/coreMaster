<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TinhThanh extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tinhthanh');

		$crud->set_subject('Châu lục');

		$crud->columns('ten', 'ma', 'cap');

		$crud->display_as('ten','Tên');
        $crud->display_as('ma','Mã');
        $crud->display_as('cap','Cấp');

        

		$this->mPageTitle = 'Tỉnh thành';
		$this->render_crud();
	}

}
