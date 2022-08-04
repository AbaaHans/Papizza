<?php
$page = "Ouvrez votre franchise";
include 'include/header.php';
?>

<div class="Franchise" id="franchise">
    <div class="cover-franchise">
        <div class="cover__icon pizza-slice">
            <div class="pizza-slice__icon">
                <img src="assets/images/papizza/OUVREZVOTREFRANCHISE/icon-franchise.png" alt="pizza icon" >
                <h1 class="cover__title">
                    <span style="background:black !important;" >Votre franchise</span>
                    <span style="background:black !important;">idéal pour les pizzas</span>
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
    <div class="franchise-intro">
        <div class="franchise-wrapper">
            <div class="franchise-intro-content">
                <p class="franchise-paragraph">
                 QUELLE <strong> FRANCHISE DE PIZZA</strong> EST LE NUMÉRO
                UN DES VENTES DES PIZZA'S EN TRANCHE ? 
                QUELLE EST LA SEULE ENSIGNE NATIONALE
                DÉDIÉE À LA FABRICATION DE PIZZA 100 % 
                ARTISANALE ? LA RÉPONSE AUX DEUX QUESTIONS
                EST LA MÊME. RECHERCHEZ-VOUS QUELLES 
                <strong>FRANCHISES DE PIZZA</strong> VOUS CONDUIRONT AU 
                SUCCÈS DANS VOTRE PROCHAINE ENTREPRISE ?
                    VOTRE AVENIR S'APPELLE PAPIZZA.
                </p>
            </div>
        </div>
    </div>
    <div class="franchise-parent-wrapper ">
        <div class="franchise-information ">
                <h2 class="franchise-information-title">Pourquoi papizza est votre franchise idéale</h2>
                <p class="franchise-information-paragraph">
                CETTE FRANCHISE THÉMATIQUE, 
                DESTINÉE À UN PUBLIC JEUNE, 
                EST EN <strong> PLEINE EXPANSION. </strong> 
                LA PREUVE EN EST QUE NOUS RECEVONS 
                DES CENTAINES DE DEMANDES DE TOUT
				LE MAROC DE POSSIBLES FRANCHISÉS. 
                VOUS POUVEZ ÊTRE L'UN D'EUX !
                </p>
                <p class="franchise-information-paragraph">
                    VOUS VOUS SENTIREZ SOUTENUS À TOUT MOMENT, 
                    CAR CHEZ JLMFOOD, NOUS AVONS DES<strong> PROGRAMMES 
                    DE FORMATION PIONNIER POUR LES FRANCHISÉS,
                     LES GESTIONNAIRES ET LES EMPLOYÉS.</strong> 
                    NOUS VOUS AIDONS AVEC LE COMPTE
                     D'EXPLOITATION ET AVEC UN PLAN 
                     DE MARKETING SPÉCIFIQUE POUR LES LOCAUX.
                     <strong> NE MANQUEZ PAS CETTE OPPORTUNITÉ UNIQUE 
                      D'INVESTIR EN VOUS, DANS VOTRE AVENIR.</strong> 
                </p>
        </div>
        <div class="franchise-formulaire ">
            <form class="formulaire" action method="post">
                    <div class="formulaire-form">Demander des informations sur la franchise</div>
                    
                            <fieldset class="franchise-formulaire-name">
                                <!-- <label for="Nome">Nom</label> -->
                                <input type="text" name="firstname" class="input-form" placeholder="Nom..." required value>
                                <!-- <label for="prenom">Prénom</label> -->
                                <input type="text" name="lastname" class="input-form" placeholder="Prénom..." required value>
                       
                            </fieldset>
                       
                       <fieldset class="franchise-formulaire-name">   
                          
                            <input type="email" class="input-form"  placeholder="Email..." required value>
                            <input type="tel"  class="input-form"  placeholder="Téléphone..." required value> 
                        </fieldset>
                        <fieldset class="franchise-formulaire-name">
                           <label for="message">Message</label>
                            <textarea   class="formulaire-textarea" rows="4" cols="50" ></textarea>
                       </fieldset>           
                

                        <fieldset class="franchise-formulaire-name">
                            <div class="button-envoie" >
                            <input type="submit" class="submit" value="Envoyer">
                            </div>
                       </fieldset> 

                       
            </form>
        </div>
    </div>
    <div class="types-de-franchises">
        <h2 class="types-de-franchises-title">
            Types
            <br>
            des locaux
        </h2>
        <p class="types-franchises-paragraph">
            PENSEZ OÙ VOUS VOULEZ IMPLIQUER VOTRE ENTREPRISE ET NOUS VOUS GUIDERONS SUR LE CHEMIN.
            VOUS SOUHAITEZ OPÉRER DANS UN <strong>CENTRE COMMERCIAL,
            UNE GARE OU UN AÉROPORT </strong>? PEUT-ÊTRE PRÉFÉREREZ-VOUS VOUS <strong>ÉTABLIR DANS UNE RUE CENTRALE</strong>
            AVEC TRANSPORT EN COMMUN CONTINU. 
            DANS LE DERNIER CAS, L'AMPLITUDE DEVRAIT ETRE PLUS GRANDE.
        </p>
        <p class="types-franchises-paragraph">
            CONTACTEZ-NOUS ET RECEVEZ PLUS DE DÉTAILS SUR 
            L'EXTENSION QUE CHAQUE LOCAL DEVRAIT AVOIR SELON VOS PRÉFÉRENCES.
            HEUREZ-VOUS DE FAIRE PARTIE DE LA FAMILLE PAPIZZA !
        </p>
        <p class="types-franchises-paragraph">
            ALORS ARRÊTEZ DE L'IMAGER ET PARTEZ ! OUVREZ 
            VOTRE PROPRE PAPIZZA ET FAITES PARTIE DE 
            CETTE RÉFÉRENCE AUTHENTIQUE DU SECTEUR DE 
            LA RESTAURATION RAPIDE ITALIENNE. 
            PARIEZ SUR<strong> L'UNE DES FRANCHISES LES PLUS
            RENTABLES, POLYVALENTES ET PRESTIGIEUSES
            DU MAROC</strong>. INNOVATION ET MODERNITÉ SE 
            FUSIONNENT DANS CE MODÈLE DONT 
            LE FONCTIONNEMENT PERMET D'UNIFORMISER 
            TOUS LES PROCESSUS
        </p>
        <p class="types-franchises-paragraph">
            DÉCIDEZ DE FAIRE PARTIE DE NOTRE FAMILLE 
            ET REJOIGNEZ UNE<strong> FRANCHISE DE PIZZA DU PRÉSENT
            ET DU FUTUR</strong>. NOUS CONTACTER!
            
            <br>
            <br>
            <a href="contact.php" class="types-franchises-btn">NOUS CONTACTER</a>
        </p>
       
       
    </div>
</div>


<?php
include 'include/footer.php';
?>