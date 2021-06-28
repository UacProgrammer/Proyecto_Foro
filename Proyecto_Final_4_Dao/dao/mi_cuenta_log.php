<!DOCTYPE html>
<html>
<head>

    <nav>
        <div >
            <a href="index_log.html">Inicio</a>
            <a href="foro_log.php">Foro</a>
            <a href="ayuda_log.php">Ayuda</a>
            <a href="../dao/admin_log.php" hidden id="Info_Admin">Admin</a>
        </div>
        <div style="display: inline-block; width: auto; float: right; margin-top: -57px; background-color: transparent;border: transparent;">
            <a href="mi_cuenta_log.php" class="btn" id="mi_cuenta">Mi cuenta</a> <a href="../dao/login.php" class="btn" id="Logout_button" onclick="salir()">Log-out</a>
            <script>
                function salir(){
                    alert("Cerrando la sesion....");
                    sleep(3);
                    session_destroy;
                }
            </script>
            <?php
            session_start();
            if($_SESSION['username']=='Tinta@gmail.com' || $_SESSION['username']=='ozzy@gmail.com' || $_SESSION['username']=='Seen@gmail.com'){
                echo "<script> document.getElementById('Info_Admin').style.display='block'; </script>";
            }
            ?>
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
        if (isset($_POST['btncambiar'])) {
			$usuario = new Usuario();
			
			$usuario->setUsuarioNombre($_POST["txtnombre"]);
			$usuario->setUsuarioEmail($_POST["txtemail"]);
			$usuario->setUsuarioPass($_POST["txtpass"]);
			$usuario->setUsuarioDate($_POST["txtfecha"]);
			$usuario->setUsuarioNivel($_POST["txtnivel"]);
            $usuario->setUsuarioId($_POST["txtid"]);

			$i =  $dao->Actualizar($usuario);
			if ($i == 1) {
				echo "<script>alert('Se actualizo usuario');</script>";
			}
			else {
				echo "<script>alert('Error: no se actualizo usuario');</script>";	
			}
		}
    }
    ?>
 <!--
    <script>
        function enableds(){
            document.getElementById('txtnombre').disabled = false;
            document.getElementById('txtemail').disabled = false;
            document.getElementById('txtpass').disabled = false;
            document.getElementById('txtnivel').disabled = false;
        }
    </script>
    -->
    <?php

        print_r($dao->Listar());
        $conexion=mysqli_connect('localhost','root','','foro_rebeldes');
        //Arreglar con Login
        $id=$_SESSION['username'];
        $sql= "select * from usuarios where usuario_email='$id'";
        $res=mysqli_query($conexion,$sql);
        while($fila=mysqli_fetch_array($res)){
            
            echo "<form method='POST' action='#'>";
            echo "<div>";
            echo "<p style='display: inline-block;'>Id Usuario:</p>";
            echo "&nbsp;&nbsp;&nbsp;";
            echo "<input type='text'  disabled name='txtid'value='";
            echo $fila["usuario_id"];
            $id_sesion=$fila["usuario_id"];
            $_SESSION['id']=$id_sesion;
            echo "'"; 
            echo "style='border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;'>";
            echo "<br>";
            echo "<p style='display: inline-block;'>Nombre:</p>";
            echo "&nbsp;&nbsp;&nbsp;";
            echo "<input type='text' id='txtnombre'  name='txtnombre' value='";
            echo $fila["usuario_nombre"];
            echo "'";
            echo "style='border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;''>";
            echo "<br>";
            echo "<p style='display: inline-block;'>Email:</p>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<input type='text' id='txtemail'  name='txtemail' value='";
            echo $fila["usuario_email"];
            echo "'";
            echo "style='border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;'>";
            echo "<br>";
            echo "<p style='display: inline-block;'>Password:</p>";
            echo "&nbsp;";
            echo "<input type='text' id='txtpass'  name='txtpass' value='";
            echo $fila["usuario_pass"];
            echo "'";
            echo "style='border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;''>";
            echo "<br>";
            echo "<p style='display: inline-block;'>Fecha:</p>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<input type='text' id='txtfecha' disabled name='txtfecha' value='";
            echo $fila["usuario_date"];
            echo "'";
            echo "style='border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;'>";
            echo "<br>";
            echo "<p style='display: inline-block;'>Nivel:</p>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<input type='text' id='txtnivel'  name='txtnivel' disabled value='";
            echo $fila["usuario_nivel"];
            echo "'"; 
            echo "style='border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;'>";
            echo "<br>";
            echo "<br>";
            echo "&nbsp;&nbsp;&nbsp;";
            echo "<input type='submit' class='button' name='btncambiar' id='btncambiar' value='Cambiar'>";
            echo "</div>";
            echo "</form>";
    ?>

<!--
    <br>
    <h1>Ingresar aqui campos con los datos del usuario q ingreso y poner un boton q diga editar que habilite los txt</h1>
    <form method="post" action="#">
        <div>
            <p style="display: inline-block;">Id Usuario:</p>
            &nbsp;&nbsp;&nbsp;
            <input type="text" disabled name="txtid" value="<?php $fila['usuario_id']; ?>" style="border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
            <br>
            <p style="display: inline-block;">Nombre:</p>
            &nbsp;&nbsp;&nbsp;
            <input type="text" disabled name="txtnombre" value="<?php $fila['usuario_nombre']; ?>" style="border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
            <br>
            <p style="display: inline-block;">Email:</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" disabled name="txtemail" value="<?php $fila['usuario_email']; ?>" style="border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
            <br>
            <p style="display: inline-block;">Password:</p>
            &nbsp;
            <input type="text" disabled name="txtpass" value="<?php $fila['usuario_pass']; ?>" style="border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
            <br>
            <p style="display: inline-block;">Fecha:</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" disabled name="txtfecha" value="<?php $fila['usuario_date']; ?>" style="border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
            <br>
            <p style="display: inline-block;">Nivel:</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" disabled name="txtnivel" value="<?php $fila['usuario_nivel']; ?>" style="border-color: white;border-bottom: ; outline: ; border: 1px; background-color: white; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
            <br>
            <br>
            <input type="submit" class="button" name="btneditar" id="btneditar" value="Editar">
            <script>

            </script>
        </div>
    </form>
        -->
    <?php } ?>
</body>
</html>