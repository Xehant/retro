<?php
include "header.php";
    @$keywords= $_GET["keywords"];
    @$valider=$_GET["valider"];
    if(isset($_GET["keywords"])&& !empty(trim($keywords))){
        $words=explode(" ",trim($keywords));
        for($i=0;$i<count($words);$i++){
            $kw[$i]="Nom like '%".$words[$i]."%'";}
        include 'config.php';
        $res=$bdd->prepare("select Nom from produits where ".implode(" or ",$kw));
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->execute();
        $tab=$res->fetchAll();
        $afficher="oui";
    }
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
    <form action="" method="get" name="fo">
        <div class="center">
            <input id="search" type="text" placeholder="Mots-clés" name="keywords" value="<?php echo $keywords?>">
            <input type="submit" name="valider" value="rechercher">
        </div>
    </form>
</div>
<?php  if(@$afficher=="oui"){?>
<div id="resultats">
    <div id="nbr"><?=count($tab)." ".(count($tab)>1?"résultats trouvés":"résultat trouvé")?> </div>
        <ol>
            <?php
                for($i=0;$i<count($tab);$i++){
            ?>
            <li><?php
            echo $tab[$i]["Nom"] ?>
            </li>
            <?php }?>
        </ol>
    </div>
    <?php } ?>
</div>
<?php
include "footer.php";
?>