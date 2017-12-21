<?php

class Vezi extends Controller {

    public function eveniment($id){
        if (isset($id)){
            $eveniment = $this->model->vezieveniment($id);   
            $nextev = $this->model->nextevents();
        } else {
            header('location:' . URL);
        }
        if ($_SESSION['isloggedin'] == TRUE) {
            require APP . 'views/_templates/header.php';
            require APP . 'views/vezi/index.php';
        } else {
            $_SESSION['msg'] = "Trebuie sa va autentificati.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/problem/index.php';
        }        
        require APP . 'views/_templates/footer.php';
        
    }

}
