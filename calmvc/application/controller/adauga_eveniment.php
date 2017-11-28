<?php


class Adauga_eveniment extends Controller
{
   
    public function index()
    {
       
        require APP . 'views/_templates/header.php';
        require APP . 'views/adauga_eveniment/index.php';
        require APP . 'views/_templates/footer.php';
    }

}
