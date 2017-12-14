
<!DOCTYPE html>
<html>
<head>

    
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="js/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
	<title>LOGIN</title>

        
        <style>
            body{background-image: url("images/dados.jpg") ;background-size: cover;font-size: 1em;font-family: arial; margin-right: 100px}
            .inputLogin{border-radius:8px;width: 100%;height: 25px;font-size: 12px }
            
            
        </style>
</head>
<body>
	<center><div ><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div>

	<table border="0" align="center" valign="middle">
	    <tr>
		<td rowspan=2>
                    <form action="validar.php" method="post">

                    <table border="0">
                        <tr>
                            <td><label style="font-size: 12pt;"><b>Usuario: </b></label></td>
                            <td width=150> <input class="inputLogin form-group has-success" type="text" value="sergio" name="usuario" required ="Ingresa Usuario"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 12px"><label style="font-size: 12pt"><b>Contraseña: </b></label></td>
                            <td witdh=150><input class="inputLogin" type="password" name="pass" value="s1" required="Ingresa Contraseña"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td width=150 align=right><input class="btn btn-primary" type="submit" value="Aceptar"></td>
                        </tr>
                    </table>
                    </form>
<br>
<!-- formulario registro -->

                    <form method="post" action="" >
                      <fieldset>
                        <legend  style="font-size: 18pt"><b>Registro</b></legend>
                        <div class="form-group">
                          <label style="font-size: 14pt"><b>Ingresa tu Usuario</b></label>
                          <input type="text" name="realname" class="form-control" required placeholder="Ingresa tu nombre" />
                        </div>
                        <div class="form-group">
                          <label style="font-size: 14pt; "><b>Ingresa tu email</b></label>
                          <input type="text" name="nick" class="form-control"  placeholder="Ingresa mail"/>
                        </div>
                        <div class="form-group">
                          <label style="font-size: 14pt;"><b>Ingresa tu Contraseña</b></label>
                          <input type="password" name="pass" class="form-control"  required placeholder="Ingresa contraseña" />
                        </div>
                        <div class="form-group">
                          <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
                          <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
                        </div>

                        </div>

                        <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

                      </fieldset>
                    </form>


<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
	    </tr>
	</table>
		</div></center></div></center>

	
</body>
</html>