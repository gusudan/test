<?php


class Home extends Controller
{
   
    public function index()
    {
       
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }

}
