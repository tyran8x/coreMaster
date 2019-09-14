<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HopDong extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('tdg_hopdong');

		$crud->set_subject('Hợp đồng');

		$crud->columns('khachhang', 'hopdong_so', 'hopdong_ngay', 'taisan_id', 'giatri', 'thoidiem', 'hoadon_so');

		$crud->display_as('khachhang','Khách hàng');
		$crud->display_as('hopdong_so','Số hợp đồng');
		$crud->display_as('hopdong_ngay','Ngày ký hợp đồng');
		$crud->display_as('chungthu_so','Số chứng thư');
		$crud->display_as('chungthu_ngay','Ngày cấp');
		$crud->display_as('chungthu_file','File chứng thư');
		$crud->display_as('mucdich_id','Mục đích');
		$crud->display_as('taisan_id','Tài sản');
		$crud->display_as('giatri','Giá trị');
		$crud->display_as('khoanthu','Khoản thu');
		$crud->display_as('thoidiem','Thời điểm thẩm định');
		$crud->display_as('hoadon_so','Số hoá đơn');
		$crud->display_as('hoadon_ngay','Ngày xuất hoá đơn');
		$crud->display_as('phuongphaps','Phương pháp');
		$crud->display_as('thamdinhviens','Thẩm định viên');

		$crud->set_relation('mucdich_id','tdg_dm_mucdich','ten');
		$crud->set_relation('taisan_id','tdg_taisan','ten');
		$crud->set_relation_n_n('phuongphaps', 'tdg_hopdong2phuongphap', 'tdg_dm_phuongphap', 'hopdong_id', 'phuongphap_id', 'ten');
		$crud->set_relation_n_n('thamdinhviens', 'tdg_hopdong2thamdinhvien', 'tdg_thamdinhvien', 'hopdong_id', 'thamdinhvien_id', 'hoten');

		$crud->set_field_upload('chungthu_file','assets/uploads/files/chungthu');
		$this->mPageTitle = 'Hợp đồng';
		$this->render_crud();
	}

}
