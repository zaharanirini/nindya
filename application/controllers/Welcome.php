<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta');

class Welcome extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_Barang');
	}
	
	public function index()
	{
		$list_barang		= $this->M_Barang->get_databarang();
		
		$data_hal = array (
			"list_barang" => $list_barang
		);

		$this->load->view("welcome_message",$data_hal);
	}
	
}
