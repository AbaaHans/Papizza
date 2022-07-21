<?php
$page = "Passez vos commandes";
include 'header.php';
?>

<div class="commande">
    <div class="cover-commande">
        <div class="cover__icon pizza-slice">
                <div class="pizza-slice__icon">
                    <img src="assets/images/papizza/icon.png" alt="pizza icon" >
                    <h1 class="cover__title">
                        <span>spécialistes</span>
                        <span>à domicile</span>
                    </h1>
            </div>
        </div>
        <div class="cover-commandez">
            <a href="commande.php">
                <div class="at-home-icon">
                    <img src="assets/images/papizza/pizza-icon.png" alt="" srcset="">
                </div>
                <div class="at-home-text">COMMANDER</div>
            </a>
        </div>
    </div>
    <div class="commande-intro">
        <div class="commande-wrapper">
            <div class="commande-intro-content">
                <p class="commande-paragraph">
                   <center>
                        <a href="assets/doc/menu 29x14.pdf" target="_blank" class="commande-intro-btn">
                        CONSULTEZ LE MENU
                        </a>
                   </center> 
                </p>
            </div>
        </div>
    </div>
    <!-- <a name="form"></a>
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
    </div> -->
    <div class="commande-adress">
            <div class="adress">
            <h1>Casablanca</h1>
            <p><i class="fa-regular fa-location-dot"></i> Papizza GHANDI</p>
            <p>Bd GHANDI 20000</p>
            <p><i class="fa-solid fa-phone"></i> 05222-50056</p>
        </div>
        <div class="adress-fbk">
        <a href="https://web.facebook.com/PapizzaMorocco" target="_blank" ><i class="fa-brands fa-facebook-f " style="color:blue"></i></a>
        </div>

    </div>    
</div>


<?php
include 'footer.php';
?>