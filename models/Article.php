<?php
    declare(strict_types=1);

    class Article {
        private int $id;
        private string $designation;
        private double $prix;

        public function __construct(string $designation, double $prix)
        {
            $this->designation = $designation;
            $this->prix = $prix;
        }

        public function getDesignation(): string
        {
            return $this->designation;
        }

        public function setDesignation(string $designation): self
        {
            $this->designation = $designation;
            return $this;
        }

        public function getPrix(): double
        {
            return $this->prix;
        }

        public function setPrix(double $prix): self
        {
            $this->prix = $prix;
            return $this;
        }
    }