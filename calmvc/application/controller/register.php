<?php


class Register extends Controller
{
   
    public function index()
    {
       
        require APP . 'views/_templates/header.php';
        require APP . 'views/register/index.php';
        require APP . 'views/_templates/footer.php';
    }

}
