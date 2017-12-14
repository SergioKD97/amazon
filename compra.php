<?php
session_start();


require("connect_db.php");


$arrayids = ($_SESSION['arrayids']);


/////////CONSULTA QUE ACTUALIZA EL STOCK AL COMPRAR UN PRODUCTO/////////
        for ($i = 0; $i < count($arrayids); $i++) {
    

$consultaActualizaStock = "UPDATE productos set productos.stock = productos.stock - (select count(cesta.idproducto) from cesta where cesta.idproducto = ".$arrayids[$i].") where cod_producto = ".$arrayids[$i]." ";
        $ejecutaActualizaStock = $mysqli->query($consultaActualizaStock);
        if($mysqli->errno){
                print_r("ESTA ES LA CONSULTA: ".$consultaActualizaStock);
                die("<p>no ha sido posible actualizar el stock . $mysqli->error <BR>");

               
        }
        
}       
//////////////// ESTA CONSULTA QUITA LOS REGISTROS DE LA CESTA DE LA COMPRA//////////////////

        for ($i = 0; $i < count($arrayids); $i++) {

            $consultaSQL ="DELETE FROM cesta WHERE idproducto = ".$arrayids[$i]."";
            $consultaDelete = $mysqli->query($consultaSQL);
            if($mysqli->errno){
            //    print_r("ESTA ES LA CONSULTA: ".$consultaCompra);
                die("<p>no ha sido posible comprar el articulo . $mysqli->error <BR>");
                
            }else{
               // $consultaActualizaStock = ""
            }
        }
        
        
//////////////// ESTA CONSULTA METE REGISTROS EN LA TABLA VENTAS//////////////////
        
        
        for ($i = 0; $i < count($arrayids); $i++) {


            $idlogin = ($_SESSION['id']);
            
            $consultaCompra= "INSERT INTO venta(producto, usuario) VALUES ($arrayids[$i],$idlogin)";
            $consultaInsert = $mysqli->query($consultaCompra);
            if($mysqli->errno){
                die("<p>no ha sido posible comprar los productos . $mysqli->error <BR>");
                
            }else{
                echo ' <script language="javascript">alert("comprado correctamente");</script> ';
                echo "<script>location.href='Productos.php?confirmaCompra=true'</script>";
            }
        }        

      
      
      ?>