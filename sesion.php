<?php
    include "validation.php";
    switch ($_SESSION["type"]) {
        case 0:
            $type="admin";
            break;
        case 1:
            $type="Vendedor";
            // code...
            break;
        case 2:
            $type="Comprador";
            // code...
            break;
        }
        echo <h3>"hola usuario ".$type." ".$_SESSION["username"];</h3>
 ?>
