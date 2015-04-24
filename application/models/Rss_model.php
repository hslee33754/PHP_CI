<?php
class Rss_model extends CI_Model {


public function get_rss(){
  
            $request = "http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&output=rss";
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