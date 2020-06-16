<?php

class Article extends Controller{

    protected function view($path, $data = array()){
        require_once '../app/views/' . $path . '.php';
    }

    public function index(){
        if(empty($_POST))
            header('Location: index');
        else $this->view('home/article', $this->get_data());
    }

    protected function get_data(){
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

    protected function display_content($data){
       
print <<<_HTML_
        <div class ="text-block">
            $data
        </div>
_HTML_;

    }

    protected function show_edit_tools($id, $table){
        if(in_array('admin', $_SESSION)){
            print <<<_HTML_
<div class="edit_tools">
<div><button class="edit_tools_update" id=$id table=$table>Изменить</button></div>
<div><button class="edit_tools_delete" id=$id table=$table>Удалить</button></div>
</div>
_HTML_;
        }
    }
}