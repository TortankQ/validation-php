<?php

if(!empty($_SESSION['produits'])){
    foreach ($_SESSION['produits'] as  $produit) {
        echo 
        '<article>
            <img src="'.$produit['image'].'" style="
            display: block;
            margin-left: 10px;
            margin-right: 10px;
            border-style: outset;
            border-color: #a8a6a6 #333 #191919 #555;
            border-radius: 5px;"
            /><br />
            <p>'.$produit['prix'].'$</p><form action="/catalogue.php" method="post"><button type="submit" name="ajoutPanier" value='.$produit['slub_nom'].'>Ajouter</button></form>
        </article>';
    }
}
