<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChuyenMuc extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('cms_category');
        $crud->columns('name', 'status',);
		$crud->set_subject('Chuyên mục');

        $crud->display_as('name','Tên chuyên mục ');
        $crud->display_as('parentid','Chuyên mục cha');
        $crud->display_as('status','Trạng thái');
        $crud->display_as('order','Số thứ tự');
        
        $crud->set_relation('parentid','cms_category','name');
        $this->unset_crud_fields('delete_status');
        

        

		$this->mPageTitle = 'Chuyên mục';
		$this->render_crud();
	}

}
