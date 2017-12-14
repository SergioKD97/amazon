<?php
session_start();


require("connect_db.php");

//ELIMINO PRODUCTO SELECCIONADO



    $zapatillas = $_GET['zapatillas'];
    $guantes = $_GET['guantes'];
    $camiseta = $_GET['camiseta'];
    $pantalon = $_GET['pantalon'];

    if(isset($zapatillas)){
        
        header("Location:Productos.php?filtroActivado=true&filtro=$zapatillas");
        
        
    }elseif (isset ($guantes)) {
    
        header("Location:Productos.php?filtroActivado=true&filtro=$guantes");
        
    }elseif (isset ($camiseta)) {
        
        header("Location:Productos.php?filtroActivado=true&filtro=$camiseta");
        
    }elseif (isset ($pantalon)) {
        
        header("Location:Productos.php?filtroActivado=true&filtro=$pantalon");
        
    }








?>