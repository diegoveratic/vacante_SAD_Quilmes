<!DOCTYPE html>
<html>
    <head>
        <title>
            Formulario
        </title>
        <meta charset="utf-8">
            <link href="../css/login.css" rel="stylesheet"/>
            <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="../bootstrap/css//bootstrap-theme.min.css" rel="stylesheet"/>
        </meta>
    </head>
    <body style="background-color:#f1f1f1;">
    
        <a name="volver" class="btn btn-default btn-lg active" href="../tabla_datos.php"><span class="glyphicon glyphicon-chevron-left"> Volver</a>

        </div>
        <div class="login">
            <h1 class="login-title">
                Registro
            </h1>
             <?php
 
      if(isset($_GET["error"])) {
        if ($_GET["error"]=="igual") {
          echo "<p class='error login-lost'>El Usuario ya a sido tomado.<br> Por favor escoga otro Usuario</p>";
        }else{
        echo "<p class='error login-lost'>Informacion erroneos. Intentelo de nuevo.</p>";
        }    
      }
       if(isset($_GET["exito"])) {
        echo "<p class='exito login-lost'>datos subidos correctamente</p>";
      }
 
     ?>
            <form action="regis_user.php" id="form-login" method="post">
                
                <input  class="login-input" id="usuario" name="usuario" placeholder="Usuario" type="text"/>

                <input  class="login-input" id="nombre" name="nombre" placeholder="Nombre" type="text"/>
                                
                <input class="login-input" id="pass" name="pass" placeholder="Contraseña" type="password"/>

                <input class="login-input" id="re_pass" name="re_pass" placeholder="Repetir Contraseña" type="password"/>
               
                <p id="bot">
                    <input class="login-button" id="registrar" name="registro" type="submit" value="Registrar"/>
                </p>
                <div id="pie">
                    Sistema de Registro
                </div>
                <!-- fin contenedor -->
            </form>
        </div>
        <script src="../bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
