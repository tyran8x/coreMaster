<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ThamDinhVien extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_thamdinhvien');

		$crud->set_subject('Thẩm định viên');

		$crud->columns('hoten', 'ngaysinh', 'donvithamdinh_id', 'gioitinh_id', 'sothe_ma', 'sothe_ngaycap', 'quequan');

		$crud->display_as('hoten','Họ và tên');
		$crud->display_as('ngaysinh','Ngày sinh');
		$crud->display_as('donvithamdinh_id','Đơn vị thẩm định');
		$crud->display_as('gioitinh_id','Giới tính');
		$crud->display_as('sothe_ma','Số thẻ');
		$crud->display_as('quequan','Quê quán');
		$crud->display_as('sothe_ngaycap','Ngày cấp');
		$crud->display_as('chucvus','Chức vụ');

		
		$crud->set_relation('donvithamdinh_id','tdg_donvithamdinh','ten');
		$crud->set_relation('gioitinh_id','tdg_dm_gioitinh','ten');
		$crud->set_relation_n_n('chucvus', 'tdg_thamdinhvien2chucvu', 'tdg_dm_chucvu', 'thamdinhvien_id', 'chucvu_id', 'ten',);
		$this->mPageTitle = 'Thẩm định viên';
		$this->render_crud();
	}

}
