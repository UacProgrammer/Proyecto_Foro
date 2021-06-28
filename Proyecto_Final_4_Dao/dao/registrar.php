<!DOCTYPE html>
<html>
<head>
    <nav>
        <div>
            <a href="../index.html">Inicio</a>
            <a href="../dao/foro.php">Foro</a>
            <a href="../dao/ayuda.php">Ayuda</a>
            <a href="../dao/mi_cuenta.php" hidden>Mi cuenta</a>
        </div>
        <div style="display: inline-block; width: auto; float: right; margin-top: -57px; background-color: transparent;border: transparent;">
        <a href="../dao/login.php" class="btn" id="Log_in_button">Log-in</a> <a href="../dao/registrar.php" class="btn" id="Registrarse_button">Registrarse</a> 
        </div>
        <hr style="margin-top: auto; width: 100%;">
    </nav>
    <link rel="stylesheet" href="../css/style.css">
</head>


<body>


    <?php
        include ('../dao/DAO/usuario/UsuarioDAO.php');
        $dao = new UsuarioDAO();
        if($_POST){
            if(isset($_POST['btnRegistrar'])) {
                $usuario = new Usuario();
                $usuario->setUsuarioId($_POST["usuarioid"]);
                $usuario->setUsuarioNombre($_POST["usuarionombre"]);
                $usuario->setUsuarioEmail($_POST["usuarioemail"]);
                $usuario->setUsuarioPass($_POST["usuariopass"]);
                $usuario->setUsuarioDate($_POST["usuariodate"]);
                $usuario->setUsuarioNivel($_POST["usuarionivel"]);
                $i =  $dao->Agregar($usuario);
                if ($i == 1) {
                    echo "<script>alert('Se agrego nuevo usuario');</script>";
                }
                else {
                    echo "<script>alert('Error: no se agrego usuario');</script>";	
                }
            }
        }
	?>


    <h2>Registrar Usuario</h2>
    <form method="post" action="#">
    <div style="text-align: left; margin-left: auto; margin-right: auto; width: 20%; height: auto; margin: auto; padding: 10px;">
        <input type="text" name="usuarioid" style="width: 200;" hidden>
        <label> Nombres: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="usuarionombre" style="width: 200;">
        <br>
        <br>
        <label> Email: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="usuarioemail" style="width: 200;">
        <br>
        <br>
        <label> Password: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="usuariopass" style="width: 200;">.
        <br>
        <br>
        <label> Fecha: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="usuariodate" style="width: 200;" id="fechaactual">
        <br>
        <br>
        <label> Nivel: </label> &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="usuarionivel" style="width: 200;">
        <script>
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;
            document.getElementById("fechaactual").value = dateTime;
        </script>
    </div>
    <br>
    <div style="text-align: center; word-spacing: 10px;">
        <input type="submit" name="btnRegistrar" class="button" value="Registrar">
    </div>
    </form>
    <br>
    <br>
</body>
<footer>

</footer>
</html>