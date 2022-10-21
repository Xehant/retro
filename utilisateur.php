<?php
include 'header.php';
include_once 'config.php'
?>

<div class="container">
    <div class="col-md-12">
        <?php 
            if(isset($_GET['err'])){
            $err = htmlspecialchars($_GET['err']);
            switch($err){
            case 'current_password':
            echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
            break;

            case 'success_password':
            echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
            break; 
            }}
        ?>
        <div class="text-center">
            <h1 class="p-5">Bonjour !</h1>
            <hr />

        </div>
    </div>       
    <h5 >Changer mon mot de passe</h5>                     
    <form action="change_password.php" method="POST">
        <label for='current_password'>Mot de passe actuel</label>
        <input type="password" id="current_password" name="current_password" class="form-control" required/>
        <br />
        <label for='new_password'>Nouveau mot de passe</label>
        <input type="password" id="new_password" name="new_password" class="form-control" required/>
        <br />
        <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
        <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
        <br />
        <input type="submit" class="btn btn-success" placeholder="Sauvegarder">
    </form>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
    <h5 class="modal-title">Changer mon avatar</h5>   
    <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
        <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
        <input type="file" name="avatar_file">
        <br />
        <input type="submit" class="btn btn-success" placeholder="Modifier">
        <a href="ajoutproduit.php">Ajouter un produit</a>
    </form>
    <br />
</div>
<?php
require 'footer.php'
?>