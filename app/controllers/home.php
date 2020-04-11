<?php

class Home extends Controller{

    public function view($path, $currency_info = [], $data = []){
        require_once '../app/views/' . $path . '.php';
    }

    public function index($currency_info = [], $data = []){
        $cr = new Currency();
        $currency_info = $cr->GetCurrency();
        $this->view('home/index', $currency_info, $this->get_static_data());       
    }    
    
    public function get_static_data(){
        try{
            
            $db = Database::Connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $q = $db->query("SELECT * FROM static_content");
            $rows = $q->fetchAll();

            return $rows;

        }catch(PDOException $e){
            print "Error: " . $e->getMessage();
        }
    }

    private function print_post($title, $img, $id){
        print <<<_HTML_
<div class="main-section-news-item" id="$id" dt='dynamic_content'>
<div class="news-item-title">$title</div>
<div class="news-item-image"><img src="../../../itnewssite/public/images/posts/$img" alt=""></div>
</div>
_HTML_;

    }

    public function display(){
        try{

            $db = Database::Connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $q = $db->query("SELECT id, title, image_path FROM dynamic_content");
           
            while($row = $q->fetch())
            $this->print_post("$row[title]", "$row[image_path]", "$row[id]");

        }catch(PDOException $e){
            print "Error: " . $e->getMessage();
        }
    }
}