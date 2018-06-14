<?php
    class Packages extends CI_Controller{
      public function index(){
        
        $data['title'] = 'Latest packages';
        $data['packages'] = $this->package_model->get_packages();

        $this->load->view('templates/header');
        $this->load->view('packages/index', $data);
        $this->load->view('templates/footer');
      }

      public function view($slug = NULL){
        
        $data['packages'] = $this->package_model->get_packages($slug);

        if(empty($data['packages'])){
          show_404();
        }

        $data['title'] = $data['packages']['title'];

        $this->load->view('templates/header');
        $this->load->view('packages/view', $data);
        $this->load->view('templates/footer');
      }
    }