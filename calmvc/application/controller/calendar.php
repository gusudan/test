<?php

class Calendar extends Controller {
      
    public function index() {
        $date = new DateTime();  
        $dateevents = $date->format('Y-m-d');
        
        $zi = $date->format("d");
        $an = $date->format("Y");
        $luna = $date->format("m");
        $lastday = $date->format("t");
        
        $firstday = $date->modify('first day of')->format("w");
        
             
        $nextmonth = $date->add(new DateInterval('P1M'))->format("Ymd");
        $prevmonth = $date->sub(new DateInterval('P2M'))->format("Ymd");
        
        $event = $this->model->findevents($dateevents);
        
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
    
    public function data($dat){
        $newdat = date('Ymd', strtotime($dat));
        $date = new DateTime($newdat);   
        $dateevents = $date->format('Y-m-d');
         
        $zi = $date->format("d");
        $an = $date->format("Y");
        $luna = $date->format("m");
        $lastday = $date->format("t");
        
        $firstday = $date->modify('first day of')->format("w");
        
             
        $nextmonth = $date->add(new DateInterval('P1M'))->format("Ymd");        
        $prevmonth = $date->sub(new DateInterval('P2M'))->format("Ymd");
        
        $event = $this->model->findevents($dateevents);
        
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
    
}