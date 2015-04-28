<?php
// views/news/idex.php

$this->load->view($this->config->item('theme').'header');
?>


<h2><?php echo $title ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title'] ?></h3>
        <div class="main">
                <?php echo $news_item['text'] ?>
        </div>
        <!--<p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>-->

        <p>
        <?php
            echo anchor('news/'.$news_item['slug'] , 'Read Article');
        ?>
        </p>


<?php endforeach ?>


<?php
    $this->load->view($this->config->item('theme').'footer');
?>