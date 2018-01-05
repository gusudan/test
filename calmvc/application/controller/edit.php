<?php

class Edit extends Controller {

    public function index() {
        $_SESSION['msg'] = 'Link incomplet';
        require APP . 'views/_templates/header.php';
        require APP . 'views/_templates/footer.php';
    }

    public function eveniment($id) {
        if (isset($id)) {
            $eveniment = $this->model->vezieveniment($id);
        } else {
            header('location:' . URL);
        }
        if (($_SESSION['isloggedin'] == TRUE) AND ( !empty($eveniment))) {
            require APP . 'views/_templates/header.php';
            require APP . 'views/edit/index.php';
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

    public function modifica($id) {

        if (($_SESSION['isloggedin'] == TRUE) AND (isset($id))) {

                $this->model->modifeveniment($_POST['titlu'], $_POST['tip'], $_POST['data'], $_POST['ora'], $_POST['detalii'], $_POST['reminder'], $id);
                $_SESSION['msg'] = "Eveniment modificat cu succes.";
                header('location: ' . URL . 'edit/eveniment/'.$id);
          
        } elseif (($_SESSION['isloggedin'] == TRUE) AND (!isset($id))) {
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
    
    public function delete($id) {

        if (($_SESSION['isloggedin'] == TRUE) AND (isset($id))) {

                $del = $this->model->delete($id);
                if($del>0){
                $_SESSION['msg'] = "Eveniment sters cu succes.";
                } else {
                    $_SESSION['msg'] = "Evenimentul nu exista.";
                }
                header('location: ' . URL . 'calendar');
          
        } elseif (($_SESSION['isloggedin'] == TRUE) AND (!isset($id))) {
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
