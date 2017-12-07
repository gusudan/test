<?php


class Home extends Controller
{
   
    public function index()
    {
        $this->calendar();
       if ($_SESSION['isloggedin'] == TRUE) {
            require APP . 'views/_templates/header.php';
            require APP . 'views/home/index.php';
        } else {
            $_SESSION['msg'] = "Trebuie sa va autentificati.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/problem/index.php';
        }
        
        require APP . 'views/_templates/footer.php';
    }

    public function calendar(){
        $date = date('l');
        if(!isset($date)){
            $date = date('l');
        } else {
            $date = mktime($date);
        }
        return $date;
    }
}
