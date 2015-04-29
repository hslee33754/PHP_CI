<?php
//Rss.php controller

class Rss extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('rss_model');
            
                $this->config->set_item('banner','RSS news feed from Google News');
                $this->config->set_item('title','RSS News Feed');
        }
    
        public function index(){
                $data['rss'] = $this->rss_model->get_rss();
				//assigning variables into data array. 

                $this->load->view('rss/index', $data);
        }
    
}