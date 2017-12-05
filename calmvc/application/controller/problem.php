<?php

class Problem extends Controller {

    public function index() {

        require APP . 'views/_templates/header.php';
        require APP . 'views/problem/index.php';
        require APP . 'views/_templates/footer.php';
    }
}
