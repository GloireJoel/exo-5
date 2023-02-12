<?php
    declare(strict_types=1);
    class MagasinDAO{

        public function insert(string $nom): bool
        {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = "INSERT INTO magasin (nom) VALUES (:nom)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
              'nom' => $nom,
            ]);
            return true;
        }

        public function read() {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = "SELECT * FROM magasin ORDER BY id DESC";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        public function readOne(int $id) {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = "SELECT * FROM magasin WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            $result = $stmt->fetch();
            return $result;
        }

        public function update(int $id, string $nom): bool
        {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = "UPDATE magasin SET nom = :nom WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
              'nom' => $nom,
              'id' => $id
            ]);
      
            return true;
        }

        public function delete(int $id) {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = 'DELETE FROM magasin WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            return true;
        }

    }