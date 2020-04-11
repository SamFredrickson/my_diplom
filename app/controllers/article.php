<?php

class Article extends Controller{

    public function view($path, $data = array()){
        require_once '../app/views/' . $path . '.php';
    }

    public function index(){
        if(empty($_POST))
            header('Location: index');
        else $this->view('home/article', $this->get_data());
    }

    public function get_data(){
        try{

            $db = Database::Connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $q = $db->query("SELECT * FROM $_POST[table] where id = $_POST[id]");
            $rows = $q->fetchAll();

            return $rows;

        }catch(PDOException $e){
            print "Error: " . $e->getMessage();
        }
    }

    public function display_content($data){
       
print <<<_HTML_
        <div class ="text-block">
            $data
        </div>
_HTML_;

    }
}