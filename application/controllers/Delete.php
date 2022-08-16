<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends MY_Controller {

        function __construct(){
                parent:: __construct();
                $this->redirectIfNotLoggedIn();
                $this->load->model('GetModel','fetch');
                $this->load->model('DeleteModel','delete');
        }

  
        public function Enquiry($id)
        {
            $status= $this->delete->deleteInfo($id, 'enquiries');
            if($status){
                $this->session->set_flashdata('success','Enquiry deleted!');
                redirect('Admin');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin');
            }
        }


        public function Portfolio($id)
        { 
            $status= $this->delete->deleteInfo($id, 'portfolio_category');
            if($status){
                $this->session->set_flashdata('success','Category deleted !');
                redirect('Admin/Portfolio');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Portfolio');
            }
        }

        public function portfolioImg($id)
        { 
            $d= $this->fetch->getInfoById($id, 'portfolio_images');
            $path= 'assets/portfolio/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'portfolio_images');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Image deleted !');
                redirect('Admin/PortfolioImg');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/PortfolioImg');
            }
        }


        public function Feedback($id)
        {
            $d= $this->fetch->getInfoById($id, 'feedbacks');
            $path= 'assets/clients/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'feedbacks');
            if($status){
                unlink("$path");
                $this->session->set_flashdata('success','Feedback deleted!');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Feedbacks');
            }
        }


        public function Clients($id)
        {
            
            $d = $this->fetch->getInfoById($id, 'clients');
            $path= 'assets/clients/'.$d->img_src;
            $status= $this->delete->deleteInfo($id, 'clients');
            if($status){
                unlink($path);
                $this->session->set_flashdata('success','Client deleted!');
                redirect('Admin/Clients');
            }
            else{
                $this->session->set_flashdata('failed','Error!');
                redirect('Admin/Clients');
            }
        }
     


}
