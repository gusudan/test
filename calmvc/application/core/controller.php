<?php

class Controller {

public $db = null;
public $model = null;

    function __construct() {
        $this->OpenDatabaseConnection();
        $this->loadModel();
    }
    
    private function OpenDatabaseConnection(){
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
    }
    
    public function loadModel(){
        require APP . 'models/model.php';
        $this->model = new Model($this->db);
    }
    
        
    public function dataTransform($data){
         $numeluni = [
                'Ian',
                'Feb',
                'Mar',
                'Apr',
                'Mai',
                'Iun',
                'Iul',
                'Aug',
                'Sep',
                'Oct',
                'Noi',
                'Dec'
            ];
            $zi = date('d', strtotime($data));
            $luna = date('n', strtotime($data));
            $an = date('Y', strtotime($data));
            
            $newdate = $zi . "-" . $numeluni[$luna-1] . "-" . $an;
            $newdate = explode('-',$newdate);
            return $newdate;
        }
}