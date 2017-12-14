<?php
session_start();


require("connect_db.php");

//ELIMINO PRODUCTO SELECCIONADO



            $consultaSQL ="DELETE FROM cesta WHERE idproducto = ".$_GET['codigoProducto']."";
            $consultaDelete = $mysqli->query($consultaSQL);
            if($mysqli->errno){
            //    print_r("ESTA ES LA CONSULTA: ".$consultaCompra);
                die("<p>no ha sido posible comprar el articulo . $mysqli->error <BR>");
                
            }else{
                echo "<script>location.href='Cesta.php?confirmaEliminacion=true'</script>";
            }
        













?>