<?php
    declare(strict_types=1);

    class ArticleDAO{

        public function insert(string $designation,  float $prix, int $magasin_id) {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = "INSERT INTO article (designation, prix, magasin_id) VALUES (:designation, :prix, :magasin_id)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
              'designation' => $designation,
              'prix' => $prix,
              'magasin_id' => $magasin_id
            ]);
            return true;
        }

        public function read() {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = 'SELECT * FROM article ORDER BY id DESC';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        public function readOne(int $id) {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = 'SELECT * FROM article WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            $result = $stmt->fetch();
            return $result;
        }

        public function update(int $id, string $designation, double $prix) {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = 'UPDATE article SET designation = :designation, prix = :prix WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->execute([
              'designation' => $designation,
              'prix' => $prix,
              'id' => $id
            ]);
      
            return true;
        }

        public function delete(int $id) {
            $conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
            $sql = 'DELETE FROM article WHERE id = :id';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            return true;
          }
    }
