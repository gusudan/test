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

}
