<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhuongXa extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('phuongxa');

		$crud->set_subject('Phường xã');
		$this->unset_crud_fields('tinhthanh_ten', 'quanhuyen_ten');
		$crud->columns('tinhthanh_ma', 'quanhuyen_ma', 'ten', 'ma', 'cap');
		$crud->display_as('tinhthanh_ma','Tỉnh thành');
		$crud->display_as('quanhuyen_ma','Quận huyện');
		$crud->display_as('ten','Tên');
        $crud->display_as('ma','Mã');
        $crud->display_as('cap','Cấp');
        
		$crud->set_relation('quanhuyen_ma','quanhuyen','ten');
		$crud->set_relation('tinhthanh_ma','tinhthanh','ten');


		$this->mPageTitle = 'Phường xã';
		$this->render_crud();
	}

	function _call_back_offices()
	{
		$this->load->model('QuanHuyen_model'); // your model
		$data = $this->QuanHuyen_model->getQuanHuyen('offices','officeCode, city', "state = '".$this->session->userdata('state')."'"); 
		$hasil ='<select name="officeCode">';
		foreach($data as $x)
		{
			$hasil .='<option value="'.$x->officeCode.'">'.$x->city.'</option>';
		}
		return $hasil.'</select>';
	}


}
