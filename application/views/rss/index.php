<?php
// views/rss/idex.php

$this->load->view($this->config->item('theme').'header');
$this->load->helper('form');
?>

<?php echo form_open('rss/index') ?>
    <h3>Enter your keyword in the search box or at the end of url</h3>
    <input type="text" name="keyword" />
    <input type="submit" name="submit" value="Search" />
</form>

<?php foreach ($rss->channel->item as $rss_item): ?>
    <h3><?php echo $rss_item->title ?></h3>
    <div class="main">
        <?php echo $rss_item->description ?>
    </div>
    <p><a href="<?php echo $rss_item->link ?>">View article</a></p>
<?php endforeach ?>

<?php
    $this->load->view($this->config->item('theme').'footer');
?>



