<form method="post" action="./ajoutProduit.php" enctype="multipart/form-data">
    <label for="nom">nom du jeu</label><br>
    <input type="text" name="titre"/><br><br>
    <label for="imageFile">Image de la jaquette</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">    
    <input type="file" name="imageFile"/><br><br>
    <label for="pric">Prix</label>
    <input type="number" name="prix"/>
    <br><br>
    <input type="submit" name="submit" value="Envoyer" />
</form>
