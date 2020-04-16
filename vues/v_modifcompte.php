<h1>hello</h1>
<? $id = $inf['id']  ?>
<? $nom = $inf['nom']  ?>
<? $prenom = $inf['prenom']  ?>
<? $login = $inf['login']  ?>
<? $adresse = $inf['adresse']  ?>
<? $cp = $inf['cp']  ?>
<? $ville = $inf['ville']  ?>
<? $datembauche= $inf['dateEmbauche']  ?>
<? $statu = $inf['statu-id']  ?>

<form action="index.php?uc=modifcompte&action=modifcompte" method="POST" >
    <div>
        <label for="">ID :</label>
        <input type="text" value="<?= $inf['id']  ?>" name = "id">
    </div>

    <div>
        <label for="">NOM :</label>
        <input type="text" value="<?= $inf['nom']  ?>" name = "nom">
    </div>

    <div>
        <label for="">PRENOM :</label>
        <input type="text" value="<?= $inf['prenom']  ?>" name = "prenom">
    </div>

    <div>
        <label for="">LOGIN :</label>
        <input type="text" value="<?= $inf['login']  ?>" name = "login">
    </div>

    <div>
        <label for="">ADRESSE :</label>
        <input type="text" value="" name = "adresse">
    </div>

    <div>
        <label for="">CP :</label>
        <input type="text" value="<?= $inf['cp']  ?>" name = "cp">
    </div>

    <div>
        <label for="">VILLE :</label>
        <input type="text" value="<?= $inf['ville']  ?>" name = "ville">
    </div>

    <div>
        <label for="">DATE EMBAUCHE :</label>
        <input type="text" value="<?= $inf['dateEmbauche']  ?>" name = "dateEmbauche"> 
    </div>

    <div>
        <label for="">STATU DU COMPTE :</label>
        <input type="text" value="<?= $inf['statu-id']  ?>" name = "statuid">
    </div>    
    <div>
        <button type="submit">Enregistre</button>
    </div>
</form>
<div class = "block">
    <div class = "container">
        <div class="field is-grouped is-grouped-centered">
            <h1 class = "title is-1">Modifier le profile de <?=$inf['nom']." ".$inf['prenom'] ?></h1>
        </div>
        <form method="POST" action="">

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">ID :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="NOM" name = "nom1" id = "" value = "<?=$inf['id']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">NOM :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="NOM" name = "nom1" id = "" value = "<?=$inf['nom']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">PRENOM :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="PRENOM" name = "prenom1" id = "" value = "<?=$inf['prenom']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">LOGIN :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="PRENOM" name = "prenom1" id = "" value = "<?=$inf['login']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">ADRESSE :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="ADRESSE" name="adresse1" id = "" value = "<?=$inf['adresse']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">CP :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="CP" name="cp1" id = "" value = "<?= $inf['cp']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">VILLE :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="VILLE" name="ville1" id = "" value = "<?= $inf['ville']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">DATE EMBAUCHE : :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="VILLE" name="ville1" id = "" value = "<?=$inf['dateEmbauche']?>">
          </div><br>

          <div class="field  is-grouped is-grouped-centered">
            <label class="label">STATUT DU COMPTE :</label>
          </div>
          <div class="control">
            <input class="input" type="text" placeholder="VILLE" name="ville1" id = "" value = "<?= $inf['statu-id']?>">
          </div>

          <br>
          <div class="field is-grouped is-grouped-centered">
            <div class="control">
              <button class="button is-black" name="">ENREGISTRE LES MODIFICATIONS</button>
            </div>
          </div>
        </form>     
    </div> 
</div>

