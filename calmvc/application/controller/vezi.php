<?php

class Vezi extends Controller {

    public function index() {
        $_SESSION['msg'] = 'Link incomplet';
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/footer.php';
    }

    public function eveniment($id) {
        if (isset($id)) {
            $eveniment = $this->model->vezieveniment($id);
            $nextev = $this->model->nextevents();
          
           
        } else {
            header('location:' . URL);
        }
        if (($_SESSION['isloggedin'] == TRUE) AND ( !empty($eveniment))) {
            require APP . 'views/_templates/header.php';
            require APP . 'views/vezi/index.php';
        } elseif (($_SESSION['isloggedin'] == TRUE) AND ( empty($eveniment))) {
            $_SESSION['msg'] = "Evenimentul nu exista.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/_templates/footer.php';
        } else {
            $_SESSION['msg'] = "Trebuie sa va autentificati.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/problem/index.php';
        }
        require APP . 'views/_templates/footer.php';
    }

}
