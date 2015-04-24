<h2><?php echo $title ?></h2>
<?php 
	/*
	echo $rss->channel->item->title; 
	die();
	*/
	
	foreach ($rss->channel->item as $rss_item): ?>
    	
        <h3><?php echo $rss_item->title ?></h3>
        <div class="main">
                <?php echo $rss_item->description ?>
        </div>
        <p><a href="<?php echo $rss_item->link ?>">View article</a></p>

<?php endforeach ?>

<!--
$request = "http://rss.news.yahoo.com/rss/software";
$response = file_get_contents($request);
$xml = simplexml_load_string($response);

<h1>' . $xml->channel->title . '</h1>'
< ? php foreach ($xml->channel->item as $story): ?>
    <a href="' . $story->link . '">' . $story->title . '</a><br />
    <p>' . $story->description . '</p><br /><br />
< ? php endforeach ?>
-->


