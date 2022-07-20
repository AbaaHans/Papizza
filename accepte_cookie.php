<?php

    setcookie('accepte-cookie', true, time() + 365*24*3600, '/', null, false, true);
   
    if ($_SERVER['HTTP_REFERER'] AND !empty($_SERVER['HTTP_REFERER'])){
      header('Location: '.$_SERVER['HTTP_REFERER']);
    }else{
      header('Location:https://www.papizza.ma/');
    }

?>