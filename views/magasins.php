<?php
include('head.php');
include ('header.php');
include_once('../models/dao/MagasinDAO.php');
?>
<div class="container" style="padding: 20px; margin-left: 30px;">
    <a href="magasin_form.php"><button class="btn-primary">Ajouter un Magasin</button></a><br>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom Magasin</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $magasinDAO = new MagasinDAO();
        $magasins = $magasinDAO->read();
        ?>
        <?php foreach($magasins as $magasin): ?>
            <tr>
                <td><?php echo $magasin['id']; ?></td>
                <td><?php echo $magasin['nom']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary">Voir</button>
                    <button type="button" class="btn btn-success">Editer</button>
                    <?php echo '<form style="display:inline;" action="../controllers/delete_magasin.php" method="POST"><input type="hidden" class="btn btn-danger" name="id" value="' . $magasin['id'] . '"><input type="submit" class="btn btn-danger" name="submit" value="Delete"></form>'; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>