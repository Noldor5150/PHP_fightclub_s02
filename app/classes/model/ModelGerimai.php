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
        if (!$this->db->getRow($this->table_name, $row_id)) {
            $this->db->setRow($this->table_name, $row_id, $gerimas->getData());
            $this->db->save();
            return true;
        } else {
            return false;
        }
    }

    public function update($row_id, \App\Item\Gerimas $gerimas) {
        if (!$this->db->getRow($this->table_name, $row_id)) {
            $this->db->setRow($this->table_name, $row_id, $gerimas->getData());
            $this->db->save();
            return true;
        } else {
            return false;
        }
    }

    public function delete($row_id) {
        if ($this->db->getRow($this->table_name, $row_id)) {
            $this->db->deleteRow($this->table_name, $row_id);
            $this->db->save();
            return true;
        } else {
            return false;
        }
    }

    public function loadAll() {
        $rows_data = $this->db->getRows($this->table_name);
        $gerimai = [];

        if ($rows_data) {
            foreach ($rows_data as $row_data) {
                $gerimai[] = \App\Item\Gerimas($row_data);
            }
            return $gerimai;
        } else {
            return false;
        }
    }

    public function deleteAll() {
        $this->db->deleteRows($this->table_name);
        $this->db->save();
    }

}
