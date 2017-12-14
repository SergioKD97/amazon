
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");
        
	$username=$_POST['usuario'];
	$pass=$_POST['pass'];
        
        
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE nombre='$username'");
	$sq2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE password='$pass'");
        $idusuario = mysqli_query($mysqli,"SELECT id FROM usuarios WHERE nombre='$username'");

        if($username = mysqli_fetch_assoc($sql)){
            
            if($pass = mysqli_fetch_assoc($sq2)){

                $fila = mysqli_fetch_array($idusuario);
                $idusuario1 = $fila['id'];
                
                $_SESSION['id'] = $idusuario1;
                
                
                echo "<script>location.href='Productos.php'</script>";
                    
                
            } else {
                echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
                echo "<script>location.href='index.php'</script>";
            }            
                    
        }else{
	    echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
	    echo "<script>location.href='index.php'</script>";	

	}

?>