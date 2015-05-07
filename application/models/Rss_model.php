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
    
    
    public function get_rss($query, $slug){
         
         
        if($query===null){#see if there is slug and take slug
            
            if ($slug ===null){
                $request = "http://news.google.com/news?pz=1cf=all&ned=us&hl=en&output=rss";
                 
            }else{
                $newSlug = str_replace("rss/", "", uri_string());
                $request = "http://news.google.com/news?pz=1cf=all&ned=us&hl=en&q=".$newSlug."&output=rss";
            }
             
        }else{#take query to the rss code
             $newQuery = str_replace(" ","",$query);
             $request = "http://news.google.com/news?pz=1cf=all&ned=us&hl=en&q=".$newQuery."&output=rss";
        }
         
        $response = file_get_contents($request);
        $xml =  new SimpleXMLElement($response);
        return $xml;
        
        
    }
    
}
