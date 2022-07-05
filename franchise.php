<?php
$page = "Ouvrez votre franchise";
include 'header.php';
?>

<div class="Franchise">
    <div class="cover-franchise"></div>
    <div class="franchise-intro">
        <div class="franchise-wrapper">
            <div class="franchise-intro-content">
                <p class="franchise-paragraph">
                 QUELLE <strong> FRANCHISE DE PIZZA</strong> EST LE NUMÉRO
                UN DES VENTES DE PIZZA COUPÉE ? 
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
    <div class="franchise-parent-wrapper row">
        <div class="franchise-information col-md-6">
                <h2 class="franchise-information-title">Pourquoi papizza est votre franchise idéale</h2>
                <p class="franchise-information-paragraph">
                CETTE FRANCHISE THÉMATIQUE, 
                DESTINÉE À UN PUBLIC JEUNE, 
                EST EN <strong> PLEINE EXPANSION. </strong> 
                LA PREUVE EN EST QUE NOUS RECEVONS 
                DES CENTAINES DE DEMANDES DE TOUTE 
                L'ESPAGNE DE POSSIBLES FRANCHISÉS. 
                VOUS POUVEZ ÊTRE L'UN D'EUX !
                </p>
                <p class="franchise-information-paragraph">
                    VOUS VOUS SENTIREZ SOUTENUS À TOUT MOMENT, 
                    CAR CHEZ FOODBOX, NOUS AVONS DES<strong> PROGRAMMES 
                    DE FORMATION PIONNIER POUR LES FRANCHISÉS,
                     LES GESTIONNAIRES ET LES EMPLOYÉS.</strong> 
                    NOUS VOUS AIDONS AVEC LE COMPTE
                     D'EXPLOITATION ET AVEC UN PLAN 
                     DE MARKETING SPÉCIFIQUE POUR LES LOCAUX.
                     <strong> NE MANQUEZ PAS CETTE OPPORTUNITÉ UNIQUE 
                      D'INVESTIR EN VOUS, DANS VOTRE AVENIR.</strong> 
                </p>
        </div>
        <div class="franchise-formulaire col-md-6">
            <form class="formulaire" action method="post">
                    <div class="formulaire-form">Demander des informations sur la franchise</div>
                       <div class="row">
                            <div class="col-md-6">
                                <label for="Nome">Nom</label>
                                <input type="text" class="input-text">
                       
                            </div>
                            <div class="col-md-6">
                                <label for="prenom">Prénom</label>
                                <input type="text">
                            </div>
                       </div>
                        <label for="email">Email</label>
                        <input type="email">
                        <label for="Téléphone">Téléphone</label>
                        <input type="tel">
                        <label for="ProI">Province d'intérêt</label>
                        <select name="" id="">
                            <option value=""></option>
                        </select>
            </form>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>