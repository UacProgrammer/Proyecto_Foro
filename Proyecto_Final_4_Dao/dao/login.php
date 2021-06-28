<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<html>
<head>

    <nav>
        <div >
            <a href="../index.html">Inicio</a>
            <a href="../dao/foro.php">Foro</a>
            <a href="../dao/ayuda.php">Ayuda</a>
            <a href="../dao/admin_log.php" hidden id="Info_Admin">Ayuda</a>
        </div>
        <div style="display: inline-block; width: auto; float: right; margin-top: -57px; background-color: transparent;border: transparent;">
        <a href="../dao/login.php" class="btn" id="Log_in_button">Log-in</a> <a href="../dao/registrar.php" class="btn" id="Registrarse_button">Registrarse</a>
        </div>
        <hr style="margin-top: auto; width: 100%;">
    </nav>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <br>
    <form method="post">
    <div id="reg" style="text-align: left; margin-left: auto; margin-right: auto; width: 20%; height: auto; margin: auto; padding: 10px; border-color: white; border-style: groove;">
        
        <br>
        <br>
        <br>
        <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Correo: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="correo" id="correo" style="width: 200px;">
        <br>
        <br>
        <label> Contraseña: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="password" name="pass" id="pass" style="width: 200px;">
        <br>
        <br>
        <br>
        <!--A este boton tenemos que meterle la funcion de hacer log in y redirigir a la pagina de foro, tmb buscar una forma de hacer desaparecer ese registrarse y login de arriba y q salga logout-->
        <button class="button text reg" style="align-self: center; margin-left: 40%; margin-right: auto; padding-top: 5px;padding-bottom: 5px;padding-left: 20px;padding-right: 20px;" name="btnLogin" >Login</button>
        </form>
        <?php
        session_start();
        include ('../dao/DAO/usuario/UsuarioDAO.php');
        $dao = new UsuarioDAO();
        if (isset($_POST['btnLogin'])) {
             
            $correo=$_POST['correo'];
            $pass=$_POST['pass'];
            $query="SELECT * FROM usuarios WHERE usuario_email = '$correo' and usuario_pass = '$pass'";
            $con=mysqli_connect('localhost','root','','foro_rebeldes');
            $data=mysqli_query($con, $query);
            $res=mysqli_num_rows($data);
            if($res==1){
                $_SESSION['username']= $correo;
                echo "<script> alert('La cuenta existe, ingresando...'); </script>";
                header("Location: index_log.html");
                echo "<label hidden value='";
                echo $_POST['correo'];
                echo "' id='lblcorreo' name='lblcorreo'>";
                echo $_POST['correo'];
                echo "</label>";
                if($correo=='Tinta@gmail.com' || $correo=='ozzy@gmail.com' || $correo=='Seen@gmail.com'){
                    echo "<script> document.getElementById('Info_Admin').hidden(false); </script>";
                }
            }else{
                echo "<script> alert('El usuario o la contrasena son incorrectos, ingrese de nuevo'); </script>";
            }
            /*
                $usuario = new Usuario();
                $usuario->setUsuarioEmail($_POST["correo"]);
			    $usuario->setUsuarioPass($_POST["pass"]);
                $i= $dao->Verificar_Login($usuario);

                if($i==1){
                    echo "<br>";
                    echo "<p>La cuenta existe, iniciando sesion...</p>";
                    header("Location: index_log.html");
                    echo "<label hidden value='";
                    echo $_POST['correo'];
                    echo "' id='lblcorreo' name='lblcorreo'>";
                    echo $_POST['correo'];
                    echo "</label>";
                    sleep(2);
                                     
                }else{
                    echo "<br>";
                    echo "<p>El usuario o la contrasena son incorrectos, ingrese de nuevo</p>";
                }*/

                
                
        }
        ?>
    </div>
    
</body>
</html>