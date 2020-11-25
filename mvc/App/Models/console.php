<?php

namespace App\Models;

use Core\DataBase;

class preco {

    private $table = 'precos';

    public function getAll() {
        $db = Database::getInstance();
        $dados - $db->getList($this->table,'*');
        return $db->getList($this->table,'*');
    }
    public function getByTituloUrl($tituloUrl) {
        $db = Database::getInstance();
        
        return $db->getList($this->table, '*', ['console' -> "'" . $console . "'" ]);
    }
}    