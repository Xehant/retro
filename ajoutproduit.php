<?php
require 'header.php'
?>
<div class="container">
<h4>Ajouter une photo du produit</h4>
<input type="file" name="image" /><br />
        <input type="number" placeholder="Définissez un prix">
		<input type="submit" placeholder="Confirmer">

<?php
error_reporting(0);
 
$msg = "Image invalide";
 
// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?></div>
<?php
require 'footer.php'
?>