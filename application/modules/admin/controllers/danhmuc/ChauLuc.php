<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChauLuc extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('chauluc');

		$crud->set_subject('Châu lục');

		$crud->columns('ma', 'tentiengviet', 'tentienganh');

		$crud->display_as('ma','Mã');
        $crud->display_as('tentiengviet','Tên tiếng việt');
        $crud->display_as('tentienganh','Tên tiếng anh');

        

		$this->mPageTitle = 'Châu lục';
		$this->render_crud();
	}

}
