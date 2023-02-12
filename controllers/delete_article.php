<?php
require_once('../models/dao/ArticleDAO.php');
$id = $_POST['id'];
$articleDAO = new ArticleDAO();

$articleDAO->delete($id);

header("Location: ../views/articles.php");
