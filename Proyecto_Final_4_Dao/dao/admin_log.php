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
                    document.getElementById('Info_Admin').style.display="none";
                }
            </script>
            <?php
            session_start();
            if($_SESSION['username']=="Tinta@gmail.com" || $_SESSION['username']=="ozzy@gmail.com" || $_SESSION['username']=="Seen@gmail.com"){
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
    echo "<p hidden>";
        include ('../dao/DAO/usuario/UsuarioDAO.php');
        $dao = new UsuarioDAO();
        print_r($dao->Listar());
        $conexion=mysqli_connect('localhost','root','','foro_rebeldes');
        $sql= "select * from usuarios";
        $res=mysqli_query($conexion,$sql);
        echo "</p>";
        echo "<h2 style='text-align:center;'>Tabla de los usuarios</h2>";
        echo "<table class='styled-table' style='margin-left:15%;'>";
        
        echo "<thead>";
        echo "<tr>";
        echo "<th>";
        echo "Id_Usuario";
        echo "</th>";
        echo "<th>";
        echo "Nombre_Usuario";
        echo "</th>";
        echo "<th>";
        echo "Email_Usuario";
        echo "</th>";
        echo "<th>";
        echo "Password_Usuario";
        echo "</th>";
        echo "<th>";
        echo "Fecha_Usuario";
        echo "</th>";
        echo "<th>";
        echo "Nivel_Usuario";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";
        while($fila=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<th style='width:180px;'>";
            echo $fila['usuario_id'];
            echo "</th>";
            echo "<br>";
            echo "<th style='width:180px;'>";
            echo $fila['usuario_nombre'];
            echo "</th>";
            echo "<th style='width:180px;'>";
            echo $fila['usuario_email'];
            echo "</th>";
            echo "<th style='width:180px; -webkit-text-security: circle; -webkit-text-security: square;'>";
            echo $fila['usuario_pass'];
            echo "</th>";
            echo "<th style='width:180px;'>";
            echo $fila['usuario_date'];
            echo "</th>";
            echo "<th style='width:180px;'>";
            echo $fila['usuario_nivel'];
            echo "</th>";
            echo "</tr>";  
        }
        echo "</table> ";
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    $sql2= "select * from publicaciones";
    $res2=mysqli_query($conexion,$sql2);
    echo "<h2 style='text-align:center;'>Tabla de las publicaciones</h2>";
    echo "<table class='styled-table' style='margin-left:15%;'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>";
        echo "Id_Publicacion";
        echo "</th>";
        echo "<th>";
        echo "Id_Usuario";
        echo "</th>";
        echo "<th>";
        echo "Id_Categoria";
        echo "</th>";
        echo "<th>";
        echo "Titulo_Publicacion";
        echo "</th>";
        echo "<th>";
        echo "Contenido_Publicacion";
        echo "</th>";
        echo "<th>";
        echo "Fecha_Publicacion";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";
    while($fila=mysqli_fetch_array($res2)){    
        echo "<tr>";
        echo "<th style='width:180px;'>";
        echo $fila['post_id'];
        echo "</th>";
        echo "<br>";
        echo "<th style='width:180px;'>";
        echo $fila['usuario_id'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['cat_id'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['post_titulo'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['post_contenido'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['post_date'];
        echo "</th>";
        echo "</tr>";  
    }
    echo "</table> ";
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php
    $sql3= "select * from respuestas";
    $res3=mysqli_query($conexion,$sql3);
    ?>
    <h2 style='text-align:center;'>Tabla de las respuestas</h2>
    <table class='styled-table' style='margin-left:15%;'>
        <thead>
        <tr>
        <th>
        Id_Respuesta
        </th>
        <th>
        Id_Publicacion
        </th>
        <th>
        Id_Usuario
        </th>
        <th>
        Respuesta
        </th>
        <th>
        Fecha_Respuesta
        </th>
        </tr>
        </thead>
        <?php
        while($fila=mysqli_fetch_array($res3)){
        echo "<tr>";
        echo "<th style='width:180px;'>";
        echo $fila['res_id'];
        echo "</th>";
        echo "<br>";
        echo "<th style='width:180px;'>";
        echo $fila['post_id'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['usuario_id'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['res_contenido'];
        echo "</th>";
        echo "<th style='width:180px;'>";
        echo $fila['res_date'];
        echo "</th>";
        echo "</tr>";  
    }
    echo "</table> ";
    ?>
<!--
    <h1>En esta parte van las tablas con la info y si alcanza tiempo tmb con count para contar las preguntas y respuestas hechas hasta ese momento</h1>
    <table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">id</th>
            <th>nombre</th>
            <th>email</th>
            <th style="width:120px;">pass</th>
            <th style="width:120px;">date</th>
            <th style="width:60px;">nivel</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->modelu->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->usuarioId; ?></td>
            <td><?php echo $r->usuarioNombre; ?></td>
            <td><?php echo $r->usuarioEmail; ?></td>
            <td><?php echo $r->usuarioPass;?></td>
            <td><?php echo $r->usuarioDate; ?></td>
            <td><?php echo $r->usuarioNivel; ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
    -->
</body>
</html>