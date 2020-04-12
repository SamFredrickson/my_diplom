<?php

class Search extends Controller{

    public function view($path){
        require_once '../app/views/' . $path . '.php';
    }

    public function index(){
       $this->view('home/search');      
    }

    private function print_post($date, $title, $img, $id, $table){
print <<<_HTML_
<div class="first-part-search-field-result" id="$id" dt="$table">
<div class="search-date">$date</div>
<div class="search-title">$title</div>
<div class="search-image"><img src="../../../itnewssite/public/images/posts/$img" alt=""></div>
</div>
_HTML_;

    }

    private function search_in_static(){
        try{

           if('POST' == $_SERVER['REQUEST_METHOD']){
            $db = Database::Connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $q = $db->query("SELECT post_created, id, title, image_path FROM static_content WHERE title LIKE '%$_POST[search_text]%'");
            
            return $q;

           }

        }catch(PDOException $e){
            print "Error: " . $e->getMessage();
        }
}

private function search_in_dynamic(){
    try{

       if('POST' == $_SERVER['REQUEST_METHOD']){
        $db = Database::Connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = $db->query("SELECT post_created, id, title, image_path FROM dynamic_content WHERE title LIKE '%$_POST[search_text]%'");
        
        return $q;

       }

    }catch(PDOException $e){
        print "Error: " . $e->getMessage();
    }
}

    public function search_posts(){

        $static = $this->search_in_static();
        $dynamic = $this->search_in_dynamic();

        if($static != null){
            while($row = $static->fetch())
            $this->print_post("$row[post_created]", "$row[title]", "$row[image_path]", "$row[id]", "static_content");
        }

        if($dynamic != null){
            while($row = $dynamic->fetch())
            $this->print_post("$row[post_created]", "$row[title]", "$row[image_path]", "$row[id]", "dynamic_content");
        }
    }
}