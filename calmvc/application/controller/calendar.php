<?php

class Calendar extends Controller {
      
    public function index() {
        $alldata = date("mY");
        $an = date("Y");
        $luna = date("n");
        $totalzile = date("t");
        $primazi = date('w',strtotime(date('01-m-Y')));
        
        if ($_SESSION['isloggedin'] == FALSE) {
            $_SESSION['msg'] = "Trebuie sa va logati.";
            require APP . 'views/_templates/header.php';
            require APP . 'views/problem/index.php';
        } else {
            require APP . 'views/_templates/header.php';
            require APP . 'views/calendar/index.php';
        }
        require APP . 'views/_templates/footer.php';
    }
    
    public function data($data){
        if (!isset($data)){
            $this->an = date("Y");
            $this->luna = date("n");
            $this->totalzile = date("t");
            $this->primazi = date('w',strtotime(date('01-m-Y')));
        } else {
            $data = strtotime($data);
            $an = date("Y",$data);
            $luna = date("n",$data);
            
            require APP . 'views/_templates/header.php';
            require APP . 'views/calendar/index.php';
        }
        
    }    
    
}