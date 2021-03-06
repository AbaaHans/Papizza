<?php

    // setcookie('accepte-cookie', true, time() + 365*24*3600, '/', null, false, true);
   
    // if ($_SERVER(['HTTP_REFERER']) AND !empty($_SERVER['HTTP_REFERER'])){
    //   header('Location: '.$_SERVER['HTTP_REFERER']);
    // }else{
    //   header('Location:https://www.papizza.ma/');
    // }
$page = "Accueil";
include 'header.php';
?>

<div class="popup">
    <div class="pupop-content">
      <div>
          <a href="menu.php">
              <img src="assets/images/papizza/pinsa-popUp_small.jpg"  alt="papizza.ma">
          </a>
          <a class="butn" href="commande.php">DÉCOUVREZ</a>
      </div>
      <div class="btns">
        <button type="button" id="close" class="pupup-x">X</button>
      </div>
    </div>
</div>
<div class="banner ">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="cover-commandez ">
        <a href="commande.php">
            <div class="at-home-icon">
                <img src="assets/images/papizza/pizza-icon.png" alt="" srcset="">
            </div>
            <div class="at-home-text">COMMANDER</div>
        </a>
    </div> 
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="" aria-label="Slide 8"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/papizza/slider-papizza/slider1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider5.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider7.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/papizza/slider-papizza/slider8.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>


<div class="content-area">
   
    <div class="content-area-1">
        <div class="content-area-1-title">
            Nos papizza
        </div>
        <p class="content-area-1-paragraph">
        À LA COUPE OU AU GOÛT, ESSAYEZ CELUI QUE VOUS AIMEZ LE PLUS !
        </p>

      
    </div>
    <div class="content-area-corta">
      <div class="content-area-corta-marker">

         <div class="content-area-corta-subtile content-area-corta-gouter ">
              <a href="menu.php#pizza-au-pensa">Pensas</a>
          </div>
          <div class="content-area-corta-line"></div>
          <div class="content-area-corta_plus">
          <img src="assets/images/pappizza/plus.png" alt="">
          </div>
          
      </div>
      
    </div>
    <div class="content-area-1-gusto">
        <div class="content-area-1-gusto-marker">
          <div class="content-area-1-gusto-subtitle">
            <a href="menu.php#pizza-au-goût">Goûter</a>
          </div>
          <div class="content-area-1-gusta-line"></div>
          <div class="content-area-1-gusta_plus">
          <img src="assets/images/pappizza/plus.png" alt="">
          </div>
        </div>
        
      </div>
      
</div>

<div class="content-menu">
  <div class="content-area-2">
    <div class="content-menu-title">MENU</div>
    <p class="content-menu-paragraph">créez votre papizza au goût en seulement 3 minutes</p>
  </div>

<div class="content-menu-marker">
  <a href="menu.php">
    <div class="content-menu-subtitle">
      consulter le menu
    </div>
  </a>
  <div class="content-menu-line"></div>
  <div class="content-menu-plus">
    <img src="assets/images/pappizza/plus.png" alt="">
  </div>
</div>
    
      <div class="container marketing">
        <div class="row">
          <div class="col-md">
              <img src="assets/images/papizza/home/base.png" alt="papizza.ma">
              <figcaption>choisissez votre fond de teint</figcaption>

          </div>
          <div class="col-md">
            <img src="assets/images/papizza/home/ingredientes.png" alt="papizza.ma">
            <figcaption>choisissez vos ingrédients</figcaption>
          
          </div>
          <div class="col-md">
            <img src="assets/images/papizza/home/salsa.png" alt="papizza.ma">
            <figcaption>choisissez votre sauce</figcaption>
          </figure>
          </div>
          <div class="col-md">
            <img src="assets/images/papizza/home/horno.png" alt="papizza.ma">
            <figcaption>3 minutes au four</figcaption>
       
          </div>
          <div class="col-md">
            <img src="assets/images/papizza/home/pizza.png" alt="papizza.ma">
            <figcaption>intelligent!</figcaption>
          </div>
        </div>
      </div>

  <!-- <ul class="content-menu-posta ">

     <li class="content-menu-posta-1">
     <figure class="content-menu__image-container">
          <img src="assets/images/papizza/home/base.png" alt="papizza.ma">
          <figcaption>choisissez votre fond de teint</figcaption>

        </figure>
     </li>
      
     <li class="content-menu-posta-2">
        <figure class="content-menu__image-container">
          <img src="assets/images/papizza/home/ingredientes.png" alt="papizza.ma">
          <figcaption>choisissez vos ingrédients</figcaption>
        </figure>
        </li>
        <li class="content-menu-posta-3">
        <figure class="content-menu__image-container">
          <img src="assets/images/papizza/home/salsa.png" alt="papizza.ma">
            <figcaption>choisissez votre sauce</figcaption>
          </figure>
      </li>
      <li class="content-menu-posta-4">
        <figure class="content-menu__image-container">
          <img src="assets/images/papizza/home/horno.png" alt="papizza.ma">
          <figcaption>3 minutes au four</figcaption>
        </figure>
        </li>
        <li class="content-menu-posta-5">
        <figure class="content-menu__image-container">
          <img src="assets/images/papizza/home/pizza.png" alt="papizza.ma">
          <figcaption>intelligent!</figcaption>
        </figure>
        </li>
</ul> -->
</div>
<div class="content-franchise">
  <div class="card">
      <div class="row g-0">
        <div class="col-md-7">
          <img src="assets/images/papizza/reciente-horneada.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-5">
          <div class="card-body">
            <h5 class="card-title">OUVREZ VOTRE FRANCHISE</h5>
            <p class="card-text">VOUS VOULEZ OUVRIR VOTRE PROPRE RESTAURANT ? la papizza est l'option que vous recherchiez</p>
            <div class="btn-fran">
              <a href="franchise.php" class="btn-franchise">Je suis intéressé</a>
          </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>

 

<?php
    if (isset($_COOKIE['accepte-cookie'])) {
        $showcookie = false;
    }else{
        $showcookie = true;
      }
?>

<?php
    if ($showcookie) {?>
      <div class="cookie">
          <span class="cookie-text">
                Nous utilisons des Cookies pour vous offrir une meilleure expérience de navigation. Si vous continuez à naviguer, nous considérons que vous acceptez son utilisation.
          </span>
          <a href="accepte_cookie.php" >accepter</a>
     </div>
<?php   }?>

<?php
include 'footer.php';
?>