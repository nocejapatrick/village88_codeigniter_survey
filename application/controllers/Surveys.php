<?php

class Surveys extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        $this->load->view('_partials/header');
        $this->load->view('survey');
        $this->load->view('_partials/footer');
    }

    public function result(){
        $this->load->view('_partials/header');
        $this->load->view('success_survey');
        $this->load->view('_partials/footer');
    }

    public function process_form(){

   

        $this->form_validation->set_rules('name', 'Name', 'required');
   
        if($this->form_validation->run()===FALSE){

            foreach($this->form_validation->error_array() as $key=>$value){
                $this->session->set_flashdata($key.'_error',$value);
            }
           

            redirect(base_url());
        }
        else{
            $submittedFormCount = ($this->session->userdata('count_form')) ? $this->session->userdata('count_form') : 0;
            $submittedFormCount++;
            $this->session->set_userdata('count_form',$submittedFormCount);
            $this->session->set_userdata('form_data',$this->input->post());
            redirect(base_url().'result');
        }


    }
}