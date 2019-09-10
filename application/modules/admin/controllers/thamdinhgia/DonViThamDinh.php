<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonViThamDinh extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_donvithamdinh');

		$crud->set_subject('Đơn vị thẩm định');

		$crud->columns('ten', 'tenviettat', 'giaychungnhan_maso', 'giaychungnhan_ngaycap', 'diachi_trusochinh', 'diachi_giaodich');

		$crud->display_as('tenviettat','Tên viết tắt');
		$crud->display_as('ten','Tên');
		
		$crud->display_as('giaychungnhan_maso','Mã số GCN');

		$crud->display_as('giaychungnhan_ngaycap','Ngày cấp');
		$crud->display_as('diachi_trusochinh','Trụ sở chính');
		$crud->display_as('diachi_giaodich','Địa chỉ giao dịch');
		$crud->display_as('nguoidaidien_id','Người đại diện');

        

		$this->mPageTitle = 'Đơn vị thẩm định';
		$this->render_crud();
	}

}
