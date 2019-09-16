<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'Admin Panel',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),
	
	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/admin/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js'
		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/admin/adminlte.min.css',
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
	),

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'user' => array(
			'name'		=> 'Users',
			'url'		=> 'user',
			'icon'		=> 'fa fa-users',
			'children'  => array(
				'List'			=> 'user',
				'Create'		=> 'user/create',
				'User Groups'	=> 'user/group',
			)
		),
		'panel' => array(
			'name'		=> 'Admin Panel',
			'url'		=> 'panel',
			'icon'		=> 'fa fa-cog',
			'children'  => array(
				'Admin Users'			=> 'panel/admin_user',
				'Create Admin User'		=> 'panel/admin_user_create',
				'Admin User Groups'		=> 'panel/admin_user_group',
			)
		),
		'danhmuc' => array(
			'name'		=> 'Danh mục hệ thống',
			'url'		=> 'danhmuc',
			'icon'		=> 'fa fa-cog',
			'children'  => array(
				'Châu lục'				=> 'danhmuc/chauluc',
				'Tỉnh thành'			=> 'danhmuc/tinhthanh',
				'Quận huyện'			=> 'danhmuc/quanhuyen',
				'Phường xã'				=> 'danhmuc/phuongxa',
			)
		),
		'thamdinhgia' => array(
			'name'		=> 'Thẩm định giá',
			'url'		=> 'thamdinhgia',
			'icon'		=> 'fa fa-cog',
			'children'  => array(
				'Mục đích'				=> 'thamdinhgia/mucdich',
				'Phương pháp'			=> 'thamdinhgia/phuongphap',
				'Nguồn vốn'				=> 'thamdinhgia/nguonvon',
				'Loại tài sản'			=> 'thamdinhgia/loaitaisan',
				'Chức vụ'				=> 'thamdinhgia/chucvu',
				'Giới tính'				=> 'thamdinhgia/gioitinh',
				'Tình trạng hợp đồng'	=> 'thamdinhgia/tinhtranghopdong',
				'Đơn vị thẩm định'		=> 'thamdinhgia/donvithamdinh',
				'Thẩm định viên'		=> 'thamdinhgia/thamdinhvien',
				'Tài sản'				=> 'thamdinhgia/taisan',
				'Hợp đồng'				=> 'thamdinhgia/hopdong',
			)
		),
		'tintuc' => array(
			'name'		=> 'Tin tức',
			'url'		=> 'tintuc',
			'icon'		=> 'fa fa-cog',
			'children'  => array(
				'Quản lý tin tức'				=> 'tintuc/quanlytintuc',
				'Chuyên mục'			=> 'tintuc/chuyenmuc',
			)
		),
		'tuyendung' => array(
			'name'		=> 'Quản lý tuyển dụng',
			'url'		=> 'tuyendung/quanlytuyendung',
			'icon'		=> 'fa fa-home',
		),
		'gioithieu' => array(
			'name'		=> 'Giới thiệu',
			'url'		=> 'gioithieu/gioithieu',
			'icon'		=> 'fa fa-home',
		),
		'util' => array(
			'name'		=> 'Utilities',
			'url'		=> 'util',
			'icon'		=> 'fa fa-cogs',
			'children'  => array(
				'Database Versions'		=> 'util/list_db',
			)
		),
		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'admin/login',

	// Restricted pages
	'page_auth' => array(
		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
		'util'						=> array('webmaster'),
		'util/list_db'				=> array('webmaster'),
		'util/backup_db'			=> array('webmaster'),
		'util/restore_db'			=> array('webmaster'),
		'util/remove_db'			=> array('webmaster'),
	),

	// AdminLTE settings
	'adminlte' => array(
		'body_class' => array(
			'webmaster'	=> 'skin-red',
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-blue',
		)
	),

	// Useful links to display at bottom of sidemenu
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
		array(
			'auth'		=> array('webmaster', 'admin'),
			'name'		=> 'API Site',
			'url'		=> 'api',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Github Repo',
			'url'		=> CI_BOOTSTRAP_REPO,
			'target'	=> '_blank',
			'color'		=> 'text-green'
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_admin';