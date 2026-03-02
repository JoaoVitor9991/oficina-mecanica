<?php

class Conexao {
    public static function conectar(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=mecanica", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e){
            die("Falha. " . $e->getMessage());
        }
    }
}