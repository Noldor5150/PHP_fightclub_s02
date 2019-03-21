<?php

namespace App\Model;

class ModelGerimai {

    private $table_name;
    private $db;

    public function __construct($table_name, \Core\FileDB $db) {
        $this->table_name = $table_name;
        $this->db = $db;
    }

    public function load($row_id) {
        $row_data = $this->db->getRow($this->table_name, $row_id);
        var_dump($row_data);
        return new \App\Item\Gerimas($row_data);
    }

    public function insert($row_id, \App\Item\Gerimas $gerimas) {
        $this->db->setRow($this->table_name, $row_id, $gerimas->getData());
        $this->db->save();
    }

}
