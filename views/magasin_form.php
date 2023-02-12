<?php include('header.php'); ?>
<div class="mb-3">
    <form style="width: 50%"  class="justify-content-center" action="../controllers/add_magasin.php" method="POST">
        <label for="exampleFormControlInput1" class="form-label">Nom du magasin</label>
        <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Jambo">
        <input type="submit" class="btn btn-primary" value="Ajouter Magasin">
    </form>
</div>