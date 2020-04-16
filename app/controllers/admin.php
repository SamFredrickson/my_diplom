<?php

class Admin extends Controller{

    public function index(){
        $this->view('home/admin');
    }

    private function show_form(){
print <<<_HTML_
<form method="POST" action="admin">
<h1 align = "center">Вход</h1>
<hr>
<div>Имя: <input type="text" name="name"></div>
<div>Пароль: <input type="password" name="password"></div>
<div><input type="submit" name="submit" value="Войти"></div>
</form>
_HTML_;
    }

    private function show_form_error(){
print <<<_HTML_
<form method="POST" action="admin">
<h1 align = "center">Вход</h1>
<hr>
<div>Имя: <input type="text" name="name"></div>
<div>Пароль: <input type="password" name="password"></div>
<div><input type="submit" name="submit" value="Войти"></div>
<div class = 'wrong'>Неверный пароль!<div>
</form>
_HTML_;
    }

    public function show(){
        if(isset($_SESSION['user'])){
           header("Location: panel");
        }else{
            if('POST' == $_SERVER['REQUEST_METHOD']){
                if($_POST['name'] == 'admin' && $_POST['password'] == PASSWORD_ADMIN)
                    $GLOBALS['session']->login();
                else $this->show_form_error();
            }else{
                $this->show_form();
            }
        }
    }

}