<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaiSan extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_taisan');

		$crud->set_subject('Tài sản');

		$crud->columns('ten', 'diadiem', 'loaitaisan_id', 'tinhthanh_id', 'quanhuyen_id', 'phuongxa_id', 'giatri');

		$crud->display_as('ten','Tên');
		$crud->display_as('diadiem','Địa điểm');
		$crud->display_as('tinhthanh_id','Tỉnh thành');
		$crud->display_as('quanhuyen_id','Quận huyện');
		$crud->display_as('phuongxa_id','Phường xã');
		$crud->display_as('loaitaisan_id','Loại tài sản');
		$crud->display_as('giatri','Giá trị');

		$crud->set_relation('tinhthanh_id','tinhthanh','ten');
		$crud->set_relation('quanhuyen_id','quanhuyen','ten');
		$crud->set_relation('phuongxa_id','phuongxa','ten');
		$crud->set_relation('loaitaisan_id','tdg_dm_loaitaisan','ten');

		$this->mPageTitle = 'Tài sản';
		$this->render_crud();
	}

}
