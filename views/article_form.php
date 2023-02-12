<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<?php
$conn = new PDO("mysql:host=localhost;dbname=shops", "root", "");
$sql = "SELECT * FROM magasin";
$stmt = $conn->prepare($sql);
$stmt->execute();
$magasins = $stmt->fetchAll(); ?>
<div class="mb-3">
    <form action="../controllers/add_article.php" method="POST">
        <label for="exampleFormControlInput1" class="form-label">Désignation</label>
        <input type="text" name="designation" class="form-control" id="exampleFormControlInput1" placeholder="Chocolat">
        <label for="exampleFormControlInput1" class="form-label">Prix de l'article</label>
        <input type="number" name="prix" class="form-control" id="exampleFormControlInput1" placeholder="4000">
        <select name="magasin_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" aria-label="Selectionner le magasin">
            <?php foreach($magasins as $magasin): ?>
                <?php echo "<option value='".$magasin['id']."'>".$magasin['nom']."</option>"; ?>
            <?php endforeach; ?>
        </select><br>
        <input type="submit" class="btn-primary btn-lg" value="Ajouter Article">
    </form>
</div>