<?php

class Model
{
    
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    
    function adduser($email, $nume, $prenume, $pass){
        
        $sql = "INSERT INTO users (email, nume, prenume, parola) VALUES (:email, :nume, :prenume, :pass)";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email, ':nume' => $nume, ':prenume' => $prenume, ':pass' => $pass);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    
    }
    
    function finduser($email){
        
        $sql = "SELECT * FROM users WHERE email = :email";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        
        return $query->rowCount();
    
    }
    
    function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = :email AND parola = :password";
        $query = $this->db->prepare($sql);
        $parameters = array(':email' => $email, ':password' => $password);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        
        return $query->fetch();
    }
    
    function addevent($iduser, $nume, $tip, $data, $ora, $detalii, $reminder){
        
        $sql = "INSERT INTO evenimente (iduser, titlu, tip, data, ora, detalii, reminder) VALUES (:iduser, :titlu, :tip, :data, :ora, :detalii, :reminder)";
        $query = $this->db->prepare($sql);
        $parameters = array(':iduser' => $iduser, ':titlu' => $nume, ':tip' => $tip, ':data' => $data, ':ora' => $ora, ':detalii' => $detalii, ':reminder' => $reminder);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    
    }
    
    function findevents($dat){
        
        $sql = "SELECT * FROM evenimente WHERE iduser = ".$_SESSION['userid']." AND MONTH(data) = MONTH(:data1) AND YEAR(data) = YEAR(:data2)";
        $query = $this->db->prepare($sql);
        $parameters = array(':data1' => $dat, ':data2' => $dat);

        // useful for debugging: you can see the SQL behind above construction by using:
         //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        
        return $query->fetchAll();
    
    }
    
    function nextevents(){
        
        $sql = "SELECT * FROM evenimente WHERE data > CURDATE() ORDER BY data ASC ";
        $query = $this->db->prepare($sql);
        
        // useful for debugging: you can see the SQL behind above construction by using:
         //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute();
        
        return $query->fetchAll();
    
    }
 
}
