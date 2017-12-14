<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
session_start();
        ?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/iconic.css" rel="stylesheet" type="text/css"/>
        
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
        <style>
            
        .header{padding-left: 0px;padding-right: 0px}    
            
        span,ol, ul, li,footer, header{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
        }


        ol, ul {
                list-style: none;
        }



        table {
                border-collapse: collapse;
                border-spacing: 0;
        }


        body {
                background: url('images/denim.png');
        }

        .clearfix {
                clear: both;
        }


        nav {
                background-image: linear-gradient(#ded, #ccd);
                border-radius: 6px;
                padding: 0 10px;
                font-size: 20px;
        }
        
        .menu{padding-left: }
        
        
        .menu li {
                float: left;
                position: relative;
        }

        .menu li a {
                color: #444;
                display: block;
                font-size: 20px;
                line-height: 20px;
                padding: 6px 12px;
                margin: 8px 8px;
                vertical-align: middle;
                text-decoration: none;
                font-family: comic sans-serif;
        }

        .menu li a:hover {
                background: -webkit-gradient(linear, center top, center bottom, from(#ededed), to(#fff));
                background-image: linear-gradient(#ededed, #fff);
                border-radius: 12px;
                box-shadow: inset 0px 0px 1px 1px rgba(0,0,0,0.1);
                color: #222;
        }


        .menu ul {
                position: absolute;
                left: -9999px;
                list-style: none;
                opacity: 0;
                transition: opacity 1s ease;

        }



        /* Muestra lo que hay dentro de cada indice */
        .menu li:hover ul {
                background: rgba(255,255,255,0.7);
                border-radius: 0 0 6px 6px;
                box-shadow: inset 0px 2px 4px rgba(0,0,0,0.4);
                left: 5px;
                opacity: 1;
                z-index: 1;
                background-color: aliceblue;        }


        #logo{
            background-image: url("images/logo.jpg");
            background-size: contain;
            height: 200px;
            background-repeat: no-repeat;
        }
        
        #logo1{
        position: fixed;width: 16%;height: 53%;       
        }
        

        
        .cuerpo{
            background-color: #ededed;
            border-radius: 6px;
            padding-left: 0px;
            padding-right: 0px;
            margin-top: 1%;
        }
        
        .inicio{
            font-family: serif;
        }
        
        /*PIE*/
        .caja{
            margin-top: 5%;
        }
        .cajaIzq{
            color:#FFFFFF;
            font-size:18px;
            padding-left: 40px;
            padding-bottom: 40px;
            
        }
        .cajaDerecha{
            text-align:right;
            color:#FFFFFF;
            font-size:18px;
            padding-right: 40px;
            padding-bottom: 40px;
            
        }
        
        #subir1{font-size: 70px;background-color: brown;border-radius: 45px;padding-left: 4.4px;padding-right: 4.3px;}
        
        </style>
        
        <?php
        $zapatillas = "zapatillas";
        $guantes = "guantes ";
        $camiseta = "camiseta";
        $pantalon = "pantalon";
        
PRINT <<<HERE
        
    </head>
    <body>
        
                
        
        <div class="container header">
            <a name="subir"></a>
            
                <div style="width:500px;"><a href="Productos.php"> <div id="logo" ></div></a></div>
            
                <nav >
                    <ul class="menu">
                        <li><a href="Productos.php"><span class="fa fa-home"></span> Home</a></li>
                        <li><a  href=""><span class="fa fa-bars"></span> Productos</a>
                                <ul>
                                    <li><a href="filtro.php?zapatillas=$zapatillas">Zapatillas</a></li>
                                    <li ><a href="filtro.php?zapatillas=$guantes" style="margin-top: 0px;">Guantes</a></li>
                                    <li><a href="filtro.php?zapatillas=$camiseta" style="margin-top: 0px;">Camisetas</a></li>
                                    <li><a href="filtro.php?zapatillas=$pantalon" style="margin-top: 0px;">Pantalones</a></li>
                                </ul>
                        </li>

                        <li><a href="#bajar"><span class="icono contacto"></span> Contacto</a>
                        </li>
                    
                        <li style="float: right"><a href="Cesta.php"><span style="font-size: 31px;margin-top: -8px;"class="fa fa-shopping-cart"></span> Cesta</a>
                        
                        </li>                    
                    
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            
            
            
            
        </div>
            
            
        <div class="cuerpo container">
HERE;
?>
        
            <?php 
        //id producto    
        $codigo = $_GET['codigo'];
        //id usuario
        $idlogin = ($_SESSION['id']);
        
        
	require("connect_db.php");

        $sql = "SELECT * FROM productos where cod_producto=$codigo";

        $resultado = mysqli_query($mysqli, $sql);

        $productos = mysqli_fetch_all($resultado);
        
        $codigo = $productos[0][0];
        $precio = $productos[0][3];
        $nombre = $productos[0][4];
        $stock = $productos[0][5];
        $descripcion1 = $productos[0][6];
        $descripcion2 = $productos[0][7];
        $descripcion3 = $productos[0][8];
        $descripcion4 = $productos[0][9];
        $imagen = $productos[0][10];

PRINT <<<HERE

            
            <div class="row" style="float:left;margin-bottom: 60px;margin-top: 3%;margin-left: 1%;">
                
                <div class="col-xs-4"><img src="images/$imagen" width="1000" heigth="1000" class="img-responsive"></img> </div>
                
                <div class="info col-xs-8">
                    
                    <div class="" style="font-size: 35px;font-family:ECIFont-Light; ">$nombre  </div>
            
        
        
                    <ul>

                    <li type="square" style=" font-size: larger;margin-left: 20px;margin-top: 3%;">$descripcion1.</li>

                    <li type="square" style="font-size: larger;margin-left: 20px;margin-top: 1%;">$descripcion2.</li>

                    <li type="square" style="font-size: larger;margin-left: 20px;margin-top: 1%;">$descripcion3.</li>

                    <li type="square" style="font-size: larger;margin-left: 20px;margin-top: 1%;">$descripcion4.</li>

                    </ul>
        
                    <form method="Post" style="margin-top:25px;"><input style="border-radius: 6px;background-color: floralwhite;font-family: cursive;font-size: 17px;" type="submit"  value="Añadir a la cesta" name="botonComprar" />
                        <span style="float:left;font-size:25px;" class="fa fa-cart-plus"></span>
                    </form>
                    
                    
                    
                    
                </div>
     
            </div>  
        
        
         
        
        
        
            
            
HERE;


if(isset($_POST['botonComprar'])){
            $consultaCompra= "INSERT INTO cesta(idproducto, idcliente) VALUES ($codigo,$idlogin)";
            $consultaInsert = $mysqli->query($consultaCompra);
            if($mysqli->errno){
                print_r("ESTA ES LA CONSULTA: ".$consultaCompra);
                die("<p>no ha sido posible insertar datos en la tabla . $mysqli->error <BR>");
                
            }else{
                echo ' <script language="javascript">alert("Añadido a la cesta correctamente");</script> ';
            }
        }


        ?>    
        
        
        </div>
        
        
        
    <div class="container-fluid">
        <div class="row caja">
    	<div class="col-xs-4 cajaIzq">
         Síguenos
        <a href="https://www.facebook.com/" target="_blank"><img alt="siguenos en facebook" height="40" src="http://3.bp.blogspot.com/-MQuocq7OzfU/UiXwUY81yQI/AAAAAAAAB0Q/h6-R_R2-buI/s1600/face.png" title="siguenos en facebook" width="40" /></a>
        <a href="https://mail.google.com" target="_blank"><img alt="siguenos en Google+" height="40" src="http://1.bp.blogspot.com/-LzgEeObkOc0/UiX1TupB_KI/AAAAAAAAB5I/Ox_ZllZY90g/s1600/Google%252B+alt.png" title="siguenos en Google+" width="40" /></a>
        <a href="https://twitter.com/?lang=es" target="_blank"><img alt="siguenos en Twitter" height="40" src="http://2.bp.blogspot.com/-B0wCtNXYV3U/UiX1VnAQSrI/AAAAAAAAB6Q/ILY3m0NJVE8/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="40" /></a>
        <a href="https://www.youtube.com/?gl=ES&hl=es" target="_blank"><img alt="Canal de youtube" height="40" src="http://1.bp.blogspot.com/-Kbat8Qs8-jI/UiX1Xb3CVVI/AAAAAAAAB6s/xHyfeb2CZY4/s1600/YouTube+alt+1.png" title="Canal de youtube" width="40" /></a>
     
       </div>

            <div class="col-xs-3" style="text-align: center">
                <a href="#subir" onmouseover="this.style.color='darkgrey'" onmouseout="this.style.color='#333'" style="color: #333;" ><div id="subir1" class="fa fa-chevron-circle-up" > </div></a>
            </div>

            <a name="bajar"><div class="col-xs-5 cajaDerecha">
          Calle 71, 28413 Barrio Alcázares,<br />Madrid, España<br>
          RavenSoporte@hotmail.com<br />
          Teléfono: 699345927 </div></a>
        </div>
    </div>
            
        
        
        
        
</body>
</html>
