<?php
require_once "Sakafo.php";
require_once "DatabaseManager.php";

class SakafoRepository
{
    const TABLE_NAME = "sakafo";

    private $db;

    public function __construct()
    {
        $databaseManager = new DatabaseManager();
        $this->db = $databaseManager->getConnexion();
    }

    public function findAll()
    {
        // Create Query SQL
        $query = "SELECT * from ". self::TABLE_NAME;

        // Create statement
        $statement = $this->db->query($query);

        // Execute Statement 
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Create empty array
        $resultEntity = [];

        // Move array of array into object array
        for($i = 0; $i < count($result); $i++){
            
            $sakafo = new Sakafo();
            $sakafo->setId($result[$i]['id']);
            $sakafo->setNom($result[$i]['nom']);

            // add each object [Sakafo] in the new array [resultEntity]
            $resultEntity[] = $sakafo;
        }

        return $resultEntity;
    }

    public function ajouterSakafo($sakafo)
    {
        // Create Query SQL
        $query = "INSERT INTO " . self::TABLE_NAME . "(nom) VALUES('". $sakafo->getNom() ."')";

        // Create statement
        $statement = $this->db->prepare($query);

        // Execute Statement 
        $statement->execute();

    }
    
}
