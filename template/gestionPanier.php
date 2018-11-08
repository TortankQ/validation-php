<?php
$produits = [];
$totalHT = 0;


if(!empty($_POST['supprimer'])){
    $done = false;
    foreach ($_SESSION['produits'] as $produit) {
        if(!$done){
            if($_POST['supprimer'] == $produit['slub_nom']){
                //todo
            }
        }
    }
}

if(!empty($_SESSION['panier'])){
    foreach ($_SESSION['panier'] as $produitSlub) {
        foreach ($_SESSION['produits'] as $produit) {
            if($produitSlub == $produit['slub_nom']){
                array_push($produits, $produit);
                $totalHT += doubleval($produit['prix']);
            }
        }
    }

}


?>

<table >
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($produits as $produit) {
        
            echo '<tr>';
                
                echo '<td>';
                    
                    echo '<img src="'.$produit['image'].'" style="
                    display: block;
                    margin-left: 10px;
                    margin-right: 10px;
                    border-style: outset;
                    border-color: #a8a6a6 #333 #191919 #555;
                    border-radius: 5px;"
                    />';
            
                    
                echo '</td>';

                echo '<td>'.$produit['prix'].'</td>';
                //echo '<td><form action="./panier.php" method="post">
                    //<button type="submit" name="supprimer" value='.$produit['slub_nom'].'>Supprimer</button>
                    //</form></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">Total HT : </td>
            <?php echo '<td>'.$totalHT.' $</td>'; ?>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">Total TTC : </td>
            <?php echo '<td> '.$totalHT*1.20.' $</td>'; ?>
        </tr>
    </tfoot>
</table>


<?php
    if(!empty($produits)){
        echo '<form action="./validation.php" method="post">
                <button type="submit" name="commander">Commander</button>
                </form>';
    }
?>