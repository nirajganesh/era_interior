<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}
	
	public function index()
	{
        header("Content-type: text/xml; charset=iso-8859-1");
		$this->load->view('sitemap',['title'=>'Sitemap']);
	}
}
