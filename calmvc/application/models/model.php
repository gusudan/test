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
 
}
