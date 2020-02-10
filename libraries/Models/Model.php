<?php 

namespace Models;

abstract class Model {

    protected $pdo;
    protected $table;

    public function __construct() {
        $this->pdo = \Database::getPDO();
    }

    /**
     * Retourne la liste des articles classés par date de création
     * 
     * @return array
     */
    public function findAll(?string $order = "" ): array // Paramètre ?string => non obligatoire
    {
        $sql = "SELECT * FROM {$this->table}";

        if ($order) { // Si $order existe, je l'ajoute à la reqûete Sql
            $sql .= " ORDER BY " . $order;
        }

        $resultats = $this->pdo->query($sql);
        // On fouille le résultat pour en extraire les données réelles
        $articles = $resultats->fetchAll();
        // var_dump($articles);
        // die();
        return $articles;
    }

    public function find(int $id): array
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $article = $query->fetch();
        
        return $article;
    }

    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }

}

?>