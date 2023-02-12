<?php
include_once('../models/dao/MagasinDAO.php');
$nom = $_POST['nom'];

$magasinDAO = new MagasinDAO();
$result = $magasinDAO->insert($nom);
header("Location: ../views/index.php");
