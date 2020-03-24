<?php

require_once 'PokemonEntity.php';
require_once 'dbConnection.php';

class PokemonHydrator {
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getPokemonEntities()
    {
        $query = $this->db->prepare("SELECT `id`, `name`, `type_1`, `type_2` FROM `pokemon`;");
        $query->setFetchMode(PDO::FETCH_CLASS, 'PokemonEntity');
        $query->execute();
        return $query->fetchAll();
    }

}