<?php

class Edit extends Controller{

    public function index(){
        $this->view("home/edit");
    }
    
    public function fill($table){
        try{

            $db = Database::Connect();
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $q = $db->query("SELECT id, title FROM $table");
            while($row = $q->fetch()){
                print "<tr id=$row[id] table=$table><td align=center>$row[id]</td><td>$row[title]</td><td align=center><span class=admin_edit>Edit</span> / <span class=admin_delete>Delete</span></td></tr>";
            }

        }catch(PDOException $e){

            print "Error: " . $e->getMessage();
        }
    }
}