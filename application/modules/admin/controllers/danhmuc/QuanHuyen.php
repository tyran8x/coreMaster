<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuanHuyen extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('quanhuyen');

		$crud->set_subject('Quận huyện');
		$this->unset_crud_fields('tinhthanh_ten');
		$crud->columns('tinhthanh_ma', 'ten', 'ma', 'cap');
		$crud->display_as('tinhthanh_ma','Tỉnh thành');
		$crud->display_as('ten','Tên');
        $crud->display_as('ma','Mã');
        $crud->display_as('cap','Cấp');
        
        $crud->set_relation('tinhthanh_ma','tinhthanh','ten');

		$this->mPageTitle = 'Quận huyện';
		$this->render_crud();
	}

}
