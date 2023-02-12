<?php
    declare(strict_types=1);
    
    class Magasin {
        private int $id;
        private string $nom;

        public function __construct(string $nom)
        {
            $this->nom = $nom;
        }

        public function getId(): int
        {
            return $this->id;
        }

        public function getNom(): string
        {
            return $this->nom;
        }

        public function setNom(string $nom): self
        {
            $this->nom = $nom;
            return $this;
        }
    }