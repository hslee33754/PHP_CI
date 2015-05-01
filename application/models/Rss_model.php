<?php
class Rss_model extends CI_Model {

    /*
    public function get_rss(){
  
        $request = "http://news.google.com/news?pz=1cf=all&ned=us&hl=en&output=rss";
        $response = file_get_contents($request);
        $xml =  new SimpleXMLElement($response);

        return $xml;
    }
    */
    
    
     public function get_rss($slug = FALSE){
         
         if ($slug === NULL){
             $request = "http://news.google.com/news?pz=1cf=all&ned=us&hl=en&output=rss";
             $response = file_get_contents($request);
             $xml =  new SimpleXMLElement($response);
             return $xml;
         }

        $query = str_replace("rss/", "", uri_string());
        
        $request = "http://news.google.com/news?pz=1cf=all&ned=us&hl=en&q=".$query."&output=rss";
        $response = file_get_contents($request);
        $xml =  new SimpleXMLElement($response);

        return $xml;
    
    }
    
}
