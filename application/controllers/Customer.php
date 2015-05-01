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
 * Customer controer for our CRUD demo
 *
 * @see Customer_model
 * @todo none
 */
class Customer extends CI_Controller {
    
    /**
     * Loads default data in to object
     *
     * Added in v3 - Result object
     *
     * @param none
     * @return void
     * @todo none
     */
    public function __construct()
    {
        parent::__construct();

        /*
        $this->load->model('rss_model');

        $this->config->set_item('banner','RSS news feed from Google News');
        $this->config->set_item('title','RSS News Feed');
        */
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
        $this->load->view('customer/index', $data);
    }#end index()   
    
}#end Customer class