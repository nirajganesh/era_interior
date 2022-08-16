<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('GetModel','fetch');
	}

	public function index()
	{	
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		// var_dump('<pre>',$response);exit;
		$this->load->view('header',$response);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{	
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',$response);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function services()
	{	
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',$response);
		$this->load->view('services');
		$this->load->view('footer');
	}

	public function portfolio()
	{	
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$response['category']=$this->fetch->getInfo('portfolio_category');
		$response['works']=$this->fetch->getWorks();
		$this->load->view('header',$response);
		$this->load->view('portfolio');
		$this->load->view('footer');
	}

	public function contact()
	{	
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header',$response);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function privacy()
	{
		$response=array();
		$response['web']=$this->fetch->getWebProfile('webprofile');
		$this->load->view('header' , $response);
		$this->load->view('policies');
		$this->load->view('footer');
	}

	
	public function enquiry(){
		// var_dump('<pre>',$_POST);exit;
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('city', 'Email', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if($this->form_validation->run() == true){
			$to = $this->fetch->getWebProfile()->email;

			$data = $this->input->post();
			$data['name']=substr(strip_tags($data['name']),0,50);
			$data['email']=substr(strip_tags($data['email']),0,50);
			$data['message']=substr(strip_tags($data['message']),0,300);


			$msg ="You have a new enquiry from- \n\r Name:".$data['name']." \n\r E-mail:".$data['email']." \n\r  Message:".$data['message'];
			$subject = "Era Interiors - New Enquiry";
			$headers = "From:" . $data['email'];
			// mail($to, $subject, $msg);
			$this->load->model('AddModel','save');
			$status= $this->save->saveInfo($data,'enquiries');

			if($status){
				$this->session->set_flashdata('success','Thank you for sending us a message. Our team will reach out to you shortly.' );
				redirect('contact#contact-form');
			}
			else{
				$this->session->set_flashdata('failed','Something went wrong. Please try again in some time.' );
				redirect('contact#contact-form');
			}
		}
		else{
			$this->session->set_flashdata('failed',strip_tags(validation_errors()));
			redirect('contact#contact-form');
		}
	}

}
