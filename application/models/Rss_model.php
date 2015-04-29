<?php
class Rss_model extends CI_Model {


public function get_rss(){
  
            $request = "http://rss.news.yahoo.com/rss/software";
            $response = file_get_contents($request);
            $xml =  new SimpleXMLElement($response);
			/*
			 array(
				'title' => $xml->channel->item -> title,
				'description' => $xml -> channel -> item -> description,
				'link' => $xml -> channel ->item ->link
				);
            */
			return $xml;
        }
        
}