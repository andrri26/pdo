<?php
class SakafoRepository
{
    const TABLE_NAME = "sakafo";

    private $db;

    public function __construct($database)
    {
        $this->db = $database->getConnexion();
    }

    public function findAll()
    {
        $query = "SELECT * from ". self::TABLE_NAME;

        $statement = $this->db->query($query);

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    
}
