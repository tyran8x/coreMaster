<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function index()
	{
		$crud = $this->generate_crud('cms_content');
		$crud->columns('title', 'info');
		// cannot change Admin User groups once created
		//if ($crud->getState()=='list')
	//	{
		//	$crud->set_relation_n_n('title', 'info');
		//}

		$this->load->model('user_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$this->render_crud();
		$this->render('home');
	}
}
