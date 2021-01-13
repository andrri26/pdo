<?php

class DatabaseManager
{
    const DB_HOST = "localhost";
    const DB_PORT = "3308";
    const DB_NAME = "pdo";
    const DB_USER = "root";
    const DB_PASSWORD = "";

    private $connexion;

    public function __construct()
    {
        $url = sprintf("mysql:host=%s;port=%s;dbname=%s", self::DB_HOST, self::DB_PORT, self::DB_NAME);

        try {
            //code...
            $this->connexion = new PDO($url, self::DB_USER, self::DB_PASSWORD);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function getConnexion()
    {
        return $this->connexion;
    }
    
}
