<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('functions');
	}
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['tes'] = 'tes';
		$this->functions->load_view('home',$data);
	}
}
