<?php

class Adauga_eveniment extends Controller {

    public function index() {

        

        if ($_SESSION['isloggedin'] == TRUE) {
            require APP . 'views/_templates/header.php';
            require APP . 'views/adauga_eveniment/index.php';
        } else {
            $_SESSION['msg'] = "Trebuie sa va autentificati.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/problem/index.php';
        }
        
        require APP . 'views/_templates/footer.php';
    }
    
    public function adauga(){
        if (isset($_POST['submit'])){
            $this->model->addevent($_SESSION['userid'], $_POST["nume"], $_POST["tip"], $_POST["data"], $_POST["ora"], $_POST["detalii"], $_POST["reminder"]);
            $_SESSION['msg'] = "Eveniment adaugat cu succes.";
        } 
        header('location: ' . URL . 'calendar/data/'.$_POST["data"]);
    }

}
