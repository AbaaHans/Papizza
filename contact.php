<?php
$page = "Contact";
include 'include/header.php';
?>
    <div class="contact no-cover" id="contact" style="padding-top: 107px;">
        <div class="contact-intro">
            <div class="contact-wrapper">
                <ul class="contact-intro-list">
                    <li> <a href="#">CONTACT</a></li>
                    <li><a href="#">TRAVAILLE AVEC NOUS</a></li>
                </ul>
                <div class="contact-intro-content">
                    <p class="contact-paragraph">CHEZ PAPIZZA, NOUS TENONS COMPTE DE VOTRE AVIS. VOUS ÊTES NOTRE CRITIQUE LE PLUS EXIGEANT ET NOUS VOULONS VOUS PLAIRE. NOUS TRAVAILLONS CHAQUE JOUR POUR OBTENIR VOTRE APPRÉCIATION ET POUR NE CESSER DE VOUS SURPRENDRE. DONC N'HÉSITEZ PAS À NOUS CONTACTER SI VOUS SOUHAITEZ <strong> RECEVOIR TOUT TYPE D'INFORMATION</strong>.</p>
                    <p  class="contact-paragraph">ÉCOUTER ATTENTIVEMENT EST AUSSI IMPORTANT QUE NOURRIR AVEC DES GARANTIES. C'EST POURQUOI, CHEZ PAPIZZA, NOUS NE TRAVAILLONS PAS SEULEMENT À LA DÉGUSTATION DES DÉLICES LES PLUS SAVOUREUX ORIGINAIRES D'ITALIE. DE PLUS, <strong>NOUS COMMUNIQUONS AVEC VOUS POUR QUE VOTRE EXPÉRIENCE</strong> SOIT INÉGALÉE DANS VOTRE MAISON ET AVEC NOS PRODUITS. APRÈS TOUT, LES CLIENTS HEUREUX SONT NOS MEILLEURS AMBASSADEURS.</p>
                    <p  class="contact-paragraph"><strong>REMPLISSEZ LE FORMULAIRE AVEC VOS DONNÉES  </strong>ET VOUS OBTIENDREZ LA RÉPONSE DONT VOUS AVEZ BESOIN EN MOINS QUE VOUS N'ATTENDEZ. N'OUBLIEZ PAS QUE VOS COMMENTAIRES SONT D'UNE IMPORTANCE VITALE POUR CEUX D'ENTRE NOUS QUI FORMENT PAPIZZA. ICI VOUS AVEZ NOTRE CONTACT!</p>
                    <p class="contact-paragraph"><strong>JLMFOOD S.A.R.L.</strong> <br>
                    GHANDI MALL MG N°1, Rue ATTABARI,
                    <br>
                    Bd GHANDI – CASABLANCA 
                    <br>
                    TEL. 0522250056 </p>
                </div>
            </div>
        </div>
        <div class="contact-formulaire">
                <form  action method="post">
                   <fieldset class="franchise-formulaire-name">
                        <input type="text" name="firstname" class="input-form" placeholder="Nom..." required value>
                        <input type="text" name="lastname" class="input-form" placeholder="Prénom..." required value>
                       
                    </fieldset>
                       
                    <fieldset class="franchise-formulaire-name">   
                          
                        <input type="email" class="input-form"  placeholder="Email..." required value>
                        <input type="tel"  class="input-form"  placeholder="Téléphone..." required value> 
                    </fieldset>

                    <fieldset class="franchise-formulaire-name">
                        <label for="message">Message</label>
                        <textarea   class="formulaire-textarea" rows="6" cols="10" ></textarea>
                  </fieldset> 

                  <fieldset class="franchise-formulaire-name" style="margin-bottom:80px">
                        <div class="button-envoie" >
                            <input type="submit" class="submit" value="Envoyer">
                        </div>
                   </fieldset>   
                </form>
            </div>
    </div>

<?php

include 'include/footer.php';
?>