<?php

namespace App\models;

class Client
{
    // Todos os registros
    public static function all()
    {
        $conexao = Conexao::connect();
        $sql = "SELECT * FROM clients";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0)
        {
            $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $res;
        }
    }

    // Um registro específico
    public static function find($id)
    {
        $conexao = Conexao::connect();
        $sql = "SELECT * FROM clients WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount() > 0)
        {
            $res = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $res;
        }else{
            return 'Nenhum registro';
        }
    }
}