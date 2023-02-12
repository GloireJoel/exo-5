<?php
    require_once('../models/dao/MagasinDAO.php');

    $id = $_POST['id'];
    
    $magasinDAO = new MagasinDAO();

    $magasinDAO->delete($id);

    header("Location: ../views/magasins.php");
