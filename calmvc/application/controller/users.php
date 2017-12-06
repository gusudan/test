<?php

class Users extends Controller {

    public function index() {

        if ($_SESSION['isloggedin'] == FALSE) {
            require APP . 'views/_templates/header.php';
            require APP . 'views/users/index.php';
        } else {
            $_SESSION['msg'] = "Trebuie sa va delogati.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/problem/index.php';
        }
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

    public function login() {
        if (isset($_POST["login"])) {
            $nruser = $this->model->finduser($_POST["email"]);

            if ($nruser == 0) {
                $_SESSION['msg'] = "Adresa de email nu exista.";
            } else {

                $user = $this->model->login($_POST["email"], $_POST["password"]);
                if ($user == NULL){
                    $_SESSION['msg'] = "Parola gresita";
                } else {
                $_SESSION['email'] = $user->email;
                $_SESSION['isloggedin'] = TRUE;
                }
            }
        } else {
            $_SESSION['msg'] = "Nu ai completat datele de login.";
        }
        header('location: ' . URL);
    }

    public function logout() {

        // Unset all of the session variables.
        $_SESSION = array();
        $_SESSION['isloggedin'] = FALSE;

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
      //  if (ini_get("session.use_cookies")) {
       //     $params = session_get_cookie_params();
       //     setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
       //     );
      //  }

// Finally, destroy the session.
        //session_destroy();
        
        header('location: ' . URL);
        
    }

}
