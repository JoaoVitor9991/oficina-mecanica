<?php

class MecanicoDAO {
    private $pdo;

    public function __construct($conexao)
    {
        $this->pdo = $conexao;
    }

     public function cadastraMecanico(Mecanico $mecanico){
        try {
            $sql = "INSERT INTO mecanicos (nome) values (:nome)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':nome', $mecanico->getNome());

            return $stmt->execute();
            
        }   catch (PDOException $e){
            echo "Erro. Entre em contado com o Gestor do projeto! " . $e->getMessage();
            return false;
        }
    }
}