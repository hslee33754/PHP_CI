<?php
//News.php controller

class News extends CI_Controller {

        public function __construct()
        {//global to all methods in the controller
                parent::__construct();
                $this->load->model('news_model');
                $this->config->set_item('banner','News Banner');
                $this->config->set_item('title','News Title');
        }
    
        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';
            
                $this->load->view('news/index', $data);
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('news/view', $data);
        }
    
        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Create a news item';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'text', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                    $this->load->view('templates/header', $data);
                    $this->load->view('news/create', $data);
                    $this->load->view('templates/footer', $data);

                }
                else
                {
                    $this->news_model->set_news();
                    $this->load->view('news/success');
                }
        }
    
        
    
}