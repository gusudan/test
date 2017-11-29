<?php
class Users extends Controller
{
   
    public function index()
    {
        
        require APP . 'views/_templates/header.php';
        require APP . 'views/users/index.php';
        require APP . 'views/_templates/footer.php';
    }

    public function adduser(){
        if (isset($_POST["submit"]) && ($_POST["inputpass"] === $_POST["inputpass2"])) {
          
            //var_dump($this->model());
            $this->model->adduser($_POST["email"], $_POST["nume"],  $_POST["prenume"],  $_POST["inputpass"]);
        }

       
        header('location: ' . URL . 'users/index');
    }
}
