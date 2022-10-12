<?php
require 'header.php'
?>
<div class="container">
<h4>Ajouter une photo du produit</h4>
<?php

if(isset($_FILES['image']) && $_FILES['image']['error'] ==0){  //l'image existe et a été stockée temporairement sur le serveur

	if ($_FILES['image']['size']<= 3000000){ //l'image fait moins de 3MO

		$informationsImage = pathinfo($_FILES['image']['name']);
		$extensionImage = $informationsImage['extension'];
		$extensionsArray = array('png', 'gif', 'jpg', 'jpeg'); //extensions qu'on autorise

		if(in_array($extensionImage, $extensionsArray)){  // le type de l'image correspond à ce que l'on attend, on peut alors l'envoyer sur notre serveur

			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.time().basename($_FILES['image']['name'])); // on renomme notre image avec une clé unique suivie du nom du fichier

			echo 'Envoi bien réussi !' ;

		}
	}
}

echo'<form method="post" action="index.php" enctype="multipart/form-data">
	<p>
		<h1>Formulaire</h1>
        
		<input type="file" name="image" /><br />
        <input type="number" placeholder="Définissez un prix">
		<button type="submit">Envoyer</button>
	</p>
	</form>';
    ?></div>
<?php
require 'footer.php'
?>