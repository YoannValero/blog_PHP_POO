<?php

class Database {
    
    /**
     * Retourne une connexion à la BDD
     * 
     * @return PDO
     */
    public static function getPDO()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'valeroBDD', 'Yoannvlr64!', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    
        return $pdo;
    }
}








