<?php
include "header.php";
?>
    <div class="container">
    <p>Recherche</p>
    <select id="monselect">
    <optgroup label="Prix:">
    <option valeur="0">Gratuit~~0.99€</option>
   <option valeur="1">1~~10€</option>
   <option valeur="2">11~~25€</option>
   <option valeur="3">51~~80€</option>
   <option value="4">81+€</option>
</select>
<select id="monselect">
    <optgroup label="Ordre par:">
    <option valeur="0">A-Z</option>
   <option valeur="1">Z-A</option>
   <option valeur="2">Du + récent</option>
   <option valeur="3">Du + ancien</option>
</select>
<select id="monselect">
    <optgroup label="Type:">
    <option valeur="0">Jeux récents</option>
   <option valeur="1">Jeux rétros</option>
   <option valeur="2">Console récentes</option>
   <option valeur="3">Console rétro</option>
   <option value="4">Accesoires</option>
</select>
<div class="center">
<input id="search" type="search" placeholder="search">
<input type="submit">
</div>
</div>
<?php
include "footer.php";
?>