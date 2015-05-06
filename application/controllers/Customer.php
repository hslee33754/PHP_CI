<?php
/**
 * Customer.php controller for a generic Customer
 * 
 * Used to show how to do CRUD in CodeIgniter.
 * 
 * @package ITC260 
 * @subpackage Customer
 * @author Kate Lee <me@kateleeseattle.com>
 * @version 1.0 2015/04/30 
 * @link http://ci.kateleeseattle.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see index.php
 * @todo none
 */

/**
 * Customer controller for our CRUD demo
 *
 * @see Customer_model
 * @todo none
 */
class Customer extends CI_Controller {
    
    /**
     * Loads default data in to object
     *
     * @param none
     * @return void
     * @todo none
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('customer_model');
        $this->config->set_item('banner','Global Customer Banner');
        $this->config->set_item('title','Customer Title');
    }#end costructor()
    
    /**Shwow initial Customer Dataase Data
     *
     * @param none
     * @return void
     * @todo none
     */
    public function index(){
        //$data['rss'] = $this->rss_model->get_rss();
        
        $data['title'] = 'Customer';
        $data['query'] = $this->customer_model->get_customers();
        
        //echo '<pre>';
        //var_dump($data);
        //die();
        //echo '</pre>';
        
        $this->load->view('customer/index', $data);
    }#end index()   
    
}#end Customer class