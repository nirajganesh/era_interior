<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {

        function __construct()
        {
            parent:: __construct();
            $this->redirectIfNotLoggedIn();
            $this->load->model('GetModel','fetch');
            $this->load->model('EditModel','edit');
        }

        public function Feedback($id)
        {
            $data=$this->input->post();
            $path=null;
            if($_FILES['img']['name']!=null){
                $path ='assets/images';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp|gif",
                    "remove_spaces" => TRUE,
                    "max_size" => 600
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img'))
                {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()));
                    redirect('Admin/Feedbacks');
                } 
                else 
                {
                    $imgdata = $this->upload->data();
                    $data['img_src'] = $imgdata['file_name'];
                    $d= $this->fetch->getInfoById($id,'feedbacks');
                    if($d->img_src){
                        $path= 'assets/images/'.$d->img_src;
                    }
                }
            }
            $status= $this->edit->updateInfo($data, $id, 'feedbacks');
            if($status){
                if($path){
                    unlink($path);
                }
                $this->session->set_flashdata('success','Feedback Updated !');
                redirect('Admin/Feedbacks');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/Feedbacks');
            }
        }

        public function Portfolio($id)
        {
            $data=$this->fetch->getInfoById($id,'portfolio_category');
            $this->load->view('admin/adminheader',['title'=>'Edit Categorye','data'=>$data]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/category-form'); 
            $this->load->view('admin/adminfooter');  
        }
        public function updatePortfolio($id)
        {  
            $this->form_validation->set_rules('category', 'Category', 'required');
            
            if($this->form_validation->run() == true){
                $data=$this->input->post();
                $status= $this->edit->updateInfo($data, $id, 'portfolio_category');
                if($status){
                    $this->session->set_flashdata('success','Category updated !' );
                    redirect('Admin/Portfolio');
                }
                else{
                    $this->session->set_flashdata('failed','Error !');
                    redirect('Admin/Portfolio');
                }
            }
            else{
                $this->session->set_flashdata('failed',strip_tags(validation_errors()));
                redirect('Admin/Portfolio');
            }
        }

        public function PortfolioImg($id)
        {
            
            $cat=$this->fetch->getInfo('portfolio_category');
            $data=$this->fetch->getInfoById($id,'portfolio_images');
            $this->load->view('admin/adminheader',['title'=>'Edit portfolio images','data'=>$data,'category'=>$cat]); 
            $this->load->view('admin/adminaside'); 
            $this->load->view('admin/portfolio-image-form'); 
            $this->load->view('admin/adminfooter');  
        }
        public function updatePortfolioImage($id)
        {
            $data=$this->input->post();
            $path=null;
            if($_FILES['img']['name']!=null){
                $path ='assets/portfolio';
                $initialize = array(
                    "upload_path" => $path,
                    "allowed_types" => "jpg|jpeg|png|bmp|webp",
                    "remove_spaces" => TRUE
                );
                $this->load->library('upload', $initialize);
                if (!$this->upload->do_upload('img')) {
                    $this->session->set_flashdata('failed',strip_tags($this->upload->display_errors()) );
                    redirect('Admin/PortfolioImg');
                }
                else {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata['file_name'];
                    $data['img_src']=$imagename;
                    $d= $this->fetch->getInfoById($id,'portfolio_images');
                    $path= 'assets/portfolio/'.$d->img_src;
                } 
            }

            $status= $this->edit->updateInfo($data,$id, 'portfolio_images');
            if($status){
                if($path){
                    unlink($path);
                }
                $this->session->set_flashdata('success','Image Updated!' );
                redirect('Admin/PortfolioImg');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/PortfolioImg');
            }
        }

        public function webProfile()
        {
            $data=$this->input->post();
            $status= $this->edit->updateWebProfile($data);

            if($status){
                $this->session->set_flashdata('success','Web Profile Updated !');
                redirect('Admin/webProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/webProfile');
            }
        }

        public function enqStatus($id)
        {
            $status= $this->edit->updateEnqStatus($id);
            if($status){
                redirect('Admin');
            }
            else{
                redirect('Admin');
            }
        }

        public function adminProfile($id)
        {
            $data=$this->input->post();
            $status= $this->edit->updateAdminProfile($data,$id);
            $user=$this->fetch->getAdminProfile();
            $this->session->set_userdata(['user' =>  $user]);

            if($status){
                $this->session->set_flashdata('success','Admin Panel Profile Updated !');
                redirect('Admin/adminProfile');
            }
            else{
                $this->session->set_flashdata('failed','Error !');
                redirect('Admin/adminProfile');
            }
        }

        function generate_url_slug($string,$table,$field='slug',$key=NULL,$value=NULL){
            $t =& get_instance();
            $slug = url_title($string);
            $slug = strtolower($slug);
            $i = 0;
            $params = array ();
            $params[$field] = $slug;
            if($key)$params["$key !="] = $value; 
            while ($t->db->where($params)->get($table)->num_rows())
            {
                if (!preg_match ('/-{1}[0-9]+$/', $slug )){
                    $slug .= '-' . ++$i;
                }
                else{
                    $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
                }
                $params [$field] = $slug;
            }
                return $slug;
        }
        

}
