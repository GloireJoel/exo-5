<?php
    require_once('../models/dao/ArticleDAO.php');

    $designation = $_POST['designation'];
    $prix = $_POST['prix'];
    $magasin_id = $_POST['magasin_id'];

    $articleDAO = new ArticleDAO();
    $result = $articleDAO->insert($designation, $prix, $magasin_id);

    header("Location: ../views/articles.php");
