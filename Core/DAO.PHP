<?php

/* use PDO; */

  abstract class DAO implements CRUDInterfaces, RepositoryInterfaces {
   
    static private $pdo;
 
    function __construct() {
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/config/database.json");
        $objectcontent = json_decode($content);
 
        if ($objectcontent) {
            $dsn = "{$objectcontent->driver}:host={$objectcontent->host};port={$objectcontent->port};dbname={$objectcontent->dbname}";
            self::$pdo = new PDO($dsn, $objectcontent->username, $objectcontent->password);
            echo "{$objectcontent->dbname}";
        } else {
            throw new Exception("Erreur de chargement de la configuration de la base de données.");
        }
    }
 
    public static function getPDO() {
        return self::$pdo;
    }}
 
 
?>  