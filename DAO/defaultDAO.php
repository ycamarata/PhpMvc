<?php

class defaultDAO extends DAO {

    public function relieve($id){

    }

    public function create($array){

    }

    public function update($id){

    }

    public function delete($id){

    }
    
    public function getAll(){
        $pdo = $this->getPdo();
        $stmt = $pdo->query("SELECT nom FROM especes");
        $stmt2 = $pdo->query("SELECT * FROM animaux");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $results1 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $results8 = array_merge($results, $results1);
                return $results8;
    }

    public function getAllBy($filter){

    }

}
?>