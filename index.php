<?php
    //Controller
    require_once("controller/userController.php");
    require_once("controller/plantController.php");

    //Models
    require_once("model/dao/userDao.php");
    require_once("model/dto/userDto.php");

    //Conexion
    require_once("model/conexion.php");

    //Arranque
    $objArranque = new Planti();
    $objArranque -> getIntro();
    
?>

<!-- Qué le dijo un perro a otro
Guau jeje -->
<!-- Yo estaba contigo perreando 
Esto no debe estar aqui
-->

