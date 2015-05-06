<?php
/**
 * Customer_model.php controller for a generic Customer
 * 
 * Used to show how to do CRUD in CodeIgniter.
 * 
 * @package ITC260 
 * @subpackage Customer
 * @author Kate Lee <me@kateleeseattle.com>
 * @version 1.0 2015/05/05 
 * @link http://ci.kateleeseattle.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer.php
 * @see index.php
 * @todo none
 */

/**
 * Customer model for our CRUD demo
 *
 * @see Customer
 * @todo none
 */
class Customer_model extends CI_Model {

    /**
     * Loads default data in to object
     *
     * @param none
     * @return void
     * @todo none
     */
    public function __construct()
    {
        $this->load->database();
    }#end constructor
    
    public function get_customers(){
        //return 'Hello from the Customer model';
        $query = $this->db->get('test_Customers');
        return $query->result_array();
    }#end get_customers
    
    
}#end Customer_model