<?php

namespace App\Models;

use SON\Db\Table;

class Article extends Table {
    
    protected $table = "article";

    protected function _insert(array $data) {
        $stmt = $this->db->prepare("Insert into ".$this->table." (nome,descricao) Values(:nome, :descricao)");
        $stmt->bindParam(":nome", $data['nome']);
        $stmt->bindParam(":descricao", $data['descricao']);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    protected function _update(array $data) {
        $stmt = $this->db->prepare("update ".$this->table." set nome=:nome, descricao=:descricao where id=:id");
        $stmt->bindParam(":id", $data['id']);
        $stmt->bindParam(":nome", $data['nome']);
        $stmt->bindParam(":descricao", $data['descricao']);
        $stmt->execute();
        return $data['id'];
    }
}