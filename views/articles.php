<?php
include('head.php');
include ('header.php');
include_once('../models/dao/ArticleDAO.php');
?>
<div class="container">
    <a href="article_form.php"><button class="btn-primary">Ajouter un article</button></a><br>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $articleDAO = new ArticleDAO();
                $articles = $articleDAO->read();
                ?>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?php echo $article['id']; ?></td>
                        <td><?php echo $article['designation']; ?></td>
                        <td><?php echo $article['prix']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary">Voir</button>
                            <button type="button" class="btn btn-success">Editer</button>
                            <?php echo '<form style="display:inline;" action="../controllers/delete_article.php" method="POST"><input type="hidden" class="btn btn-danger" name="id" value="' . $article['id'] . '"><input type="submit" class="btn btn-danger" name="submit" value="Delete"></form>'; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>