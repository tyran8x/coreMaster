<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TinhTrangHopDong extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_dm_tinhtranghopdong');

		$crud->set_subject('Tình trạng hợp đồng');

		$crud->columns('ma', 'ten');

		$crud->display_as('ma','Mã');
        $crud->display_as('ten','Tên ');

        

		$this->mPageTitle = 'Tình trạng hợp đồng';
		$this->render_crud();
	}

}
