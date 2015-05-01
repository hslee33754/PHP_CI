<?php
/**
 * index.php view for a generic Customer controller
 * 
 * Used to show how to do CRUD in CodeIgniter.
 *
 * views/customer/index.php
 * 
 * @package ITC260 
 * @subpackage Customer
 * @author Kate Lee <me@kateleeseattle.com>
 * @version 1.0 2015/04/30 
 * @link http://ci.kateleeseattle.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see Customer.php
 * @todo none
 */

$this->load->view($this->config->item('theme').'header');
?>

<h3><?php echo $title ?></h3>

<?php
    $this->load->view($this->config->item('theme').'footer');
?>


