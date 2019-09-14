<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuanLyTinTuc extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('cms_content');
        $crud->columns('title', 'info',);
		$crud->set_subject('Quản lý tin tức');

        $crud->display_as('title','Tiều đề ');
        $crud->display_as('idcat','Chuyên mục');
        $crud->display_as('info','Tóm tắt');
        $crud->display_as('content','Nội dung');
        $crud->display_as('smallimage','Hình ảnh url');
        $crud->display_as('metadata','Từ khóa');
        
        $crud->set_field_upload('smallimage','assets/uploads/files/tintuc');
       $crud->set_relation('idcat','cms_category','name');
        $this->unset_crud_fields('delete_status','createdtime','createdby','version','hits','alias','modifiedtime','modifiedby','status','orders');
        

        

		$this->mPageTitle = 'Quản lý tin tức';
		$this->render_crud();
	}

}
