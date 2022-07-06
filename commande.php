<?php
$page = "Passez vos commandes";
include 'header.php';
?>

<div class="commande">
    <div class="cover-commande"></div>
    <div class="commande-intro">
        <div class="commande-wrapper">
            <div class="commande-intro-content">
                <p class="commande-paragraph">
                   <center>
                        <a href="assets/doc/carta-a-domicilio.pdf" target="_blank" class="commande-intro-btn">
                        VÉRIFIEZ LA LETTRE D'ACCUEIL
                        </a>
                   </center> 
                </p>
            </div>
        </div>
    </div>
    <a name="form"></a>
    <div class="commande-form-container">
        <form class="formulaire commande-formulaire" action method="post">
            <fieldset>
                <select name="local" class="formulaire-select">
                    <option value>Sélectionnez votre papizza préférée :</option>
                    <option value="1">Papizza Callao</option>
                    <option value="2">Papizza Fuencarral</option>
                    <option value="3">Papizza Gran Via 26</option>
                    <option value="4">Papizza Puerto Banus</option>
                    <option value="5">Papizza Vitoria</option>
                    <option value="6">Papizza Alicante</option>
                </select>
            </fieldset>
            <fieldset>
               <input type="submit" class="cmd-pizza" value="CHERCHER">
            </fieldset>
        </form>
    </div>
    
</div>


<?php
include 'footer.php';
?>