<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		$this->load->view('/product/view');
	}

	public function detail($num = 0) {
		$query = array();
		$query['number'] = $num;
		$data['selected'] = $this->home_m->view('court', $query);

		$this->load->view('/court/view', $data);
	}

	public function view($num = '') {
		$data['selected'] = array(
			'number' => $num,
			'name' => '일산매물',
			'created_at' => '2019-02-19 00:00:00'
		);
		
		$this->load->view('/product/detail', $data);
	}
}