<?php

class Users extends Controller {

    public function index() {

        require APP . 'views/_templates/header.php';
        require APP . 'views/users/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function adduser() {
        if (isset($_POST["submit"]) && ($_POST["inputpass"] === $_POST["inputpass2"])) {
            $nruser = $this->model->finduser($_POST["inputemail"]);
                        
            if ($nruser != 0) {
                $_SESSION['msg'] = "Adresa de email deja existenta.";
            } else {

                //var_dump($this->model());
                $this->model->adduser($_POST["inputemail"], $_POST["inputnume"], $_POST["inputprenume"], $_POST["inputpass"]);
                $_SESSION['msg'] = "User adaugat cu succes.";
            }
        } else {
            $_SESSION['msg'] = "Parolele nu coincid.";
        }

        header('location: ' . URL . 'users/index');
    }
    
    public function login(){
        if (isset($_POST["login"])){
            $nruser = $this->model->finduser($_POST["email"]);
                        
            if ($nruser == 0) {
                $_SESSION['msg'] = "Adresa de email nu exista.";
            } else {
                
                $user = $this->model->login($_POST["email"], $_POST["password"]);
                $_SESSION['email'] = $user->email;
                               
            }
        } else {
            $_SESSION['msg'] = "Nu ai completat datele de login.";
        }
        header('location: ' . URL . 'users/index');
    }
    
    public function logout(){
        session_destroy();
        header('location: ' . URL . 'users/index');
    }

}
