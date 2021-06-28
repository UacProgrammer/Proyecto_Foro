<!DOCTYPE html>
<html>
<head>

    <nav>
        <div >
            <a href="../login/index.html">Inicio</a>
            <a href="../dao/foro.php">Foro</a>
            <a href="../dao/ayuda.php">Ayuda</a>
            <a href="" hidden id="Informacion para Admin">Ayuda</a>
        </div>
        <div style="display: inline-block; width: auto; float: right; margin-top: -57px; background-color: transparent;border: transparent;">
        <a href="../dao/login.php" class="btn" id="Log_in_button">Log-in</a> <a href="../dao/registrar.php" class="btn" id="Registrarse_button">Registrarse</a>
        </div>
        <hr style="margin-top: auto; width: 100%;">
    </nav>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <script>
        focusMethod = function getFocus() {
            document.getElementById("cuadrop").focus();
        }
    </script>
    <br>

    
    <div>
        <img src="" alt="">
    </div>
    <!--Probamos otro metodo-->
    <div style="display: flex;align-items: center; justify-content: center; width: 100%;">
        <div style="text-align: center;">
        <?php
        //Para ocultar el error XD
        error_reporting(E_ERROR | E_PARSE);
        session_start();
        
        if($_POST){
            if (isset($_POST['titulo'])) {
                include ('../dao/DAO/publicaciones/PublicacionesDAO.php');
                include ('../dao/DAO/respuestas/RespuestasDAO.php');
                $dao = new PublicacionesDAO();
                $valor_a=$_POST['titulo'];
                $_SESSION['titu']=$valor_a;
                echo "<p hidden>";
                print_r($dao->Listar_Pregunta());
                
                $conexion=mysqli_connect('localhost','root','','foro_rebeldes');
                $sql= "select usuario_id,post_titulo,post_contenido,post_date from publicaciones where post_id ='$valor_a'";
                $res=mysqli_query($conexion,$sql);
                echo "</p>";
                echo "<table style='display: table; text-align: center; flex-direction: center; border-radius: 6px; border-style: outset;color: #6D7781;' class='styled-table'>";
                while($fila=mysqli_fetch_array($res)){
                    
                    echo "<tr>";
                    echo "<td>";
                    echo "<label style='display:inline-block; float:left;'>";
                    echo $fila['usuario_id'];
                    echo "</label>";
                    echo "</td>";
                    echo "<td>";
                    echo "<div style='text-align: center; width: fit-content;display: inline-block;'>";
                    echo "<p>";
                    echo $fila['post_titulo'];
                    echo "</p>";
                    echo "<hr>";
                    echo "<p>";
                    echo $fila['post_contenido'];
                    echo "</p>";
                    echo "</div>";
                    echo "</td>";
                    echo "<td>";
                    echo "<div style='display: inline-block; text-align: right;float:right'>";
                    echo "<p style='float:right;'>";
                    echo $fila['post_date'];
                    echo "<p>";
                    echo "</div>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            
        ?>
        <br>
        <br>
        <?php
            
                    $dao2 = new RespuestasDAO();
                    echo "<p hidden>";
                    print_r($dao2->Listar_Respuestas());
                    
                    //$conexion2=mysqli_connect('localhost','root','','foro_rebeldes');
                    $sql2= "select res_id,usuario_id,res_contenido,res_date from respuestas where post_id ='$valor_a'";
                    $res2=mysqli_query($conexion,$sql2);
                    echo "</p>";
                    echo "<table style='display: table; text-align: center; flex-direction: center; border-radius: 6px; border-style: outset;color: #6D7781;' class='styled-table'>";
                    while($fila=mysqli_fetch_array($res2)){
                        
                        echo "<tr style='padding-bottom: 10px;'>";
                        echo "<div>";
                        echo "<td>";
                        echo $fila['res_id'];
                        echo"</td>";
                        echo "<td>";
                        echo $fila['res_contenido'];
                        echo "</td>";
                        echo "<td>";
                        echo $fila['usuario_id'];
                        echo "</td>";
                        echo "<td>";
                        echo $fila['res_date'];
                        echo "</td>";
                        echo "</div>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }else if (isset($_POST['RegRes'])) {
                    /*
                    include ('../dao/DAO/respuestas/RespuestasDAO.php');
                    $dao3= new RespuestasDAO();
                    $respuesta = new Respuestas();
                    $respuesta->setResId($_POST["id"]);
                    $respuesta->setPostId($_SESSION['titu']);
                    $respuesta->setUsuarioId($_POST["txtUsuarioId"]);
                    $respuesta->setResContenido($_POST["txtResContenido"]);
                    $respuesta->setResDate($_POST["txtFechaRes"]);
                    $i =  $dao3->Agregar($respuesta);
                    if ($i == 1) {
                        echo "<script>alert('Se agrego nuevo usuario');</script>";
                    }
                    else {
                        echo "<script>alert('Error: no se agrego usuario');</script>";	
                    }*/
                    $posid=$_SESSION['titu'];
                    $userid=$_POST['txtUsuarioId'];
                    $resp=$_POST['txtResContenido'];
                    $fecha=$_POST['txtFechaRes'];
                    $query="INSERT INTO respuestas VALUES ('','$posid','$userid','$resp','$fecha')";
                    $con=mysqli_connect('localhost','root','','foro_rebeldes');
                    if($con->query($query)==true){
                        echo "Se inserto correctamente";
                    }else{
                        echo "No se inserto correctamente";
                    }
                }
            }


        ?>
        
        <br>
        <br>
        <br>
        <!--Buscar la forma de conseguir el id del cliente que ingreso para el registro de respuestas y preguntas, como metelerle varios forms a un solo php,
        como identificarlos o averiguar la forma de importar los names de los tags de otros php's-->
        
        <form method="post" name="">
        <div id="reg" hidden>
            <input type="text" name="usuarioid" style="width: 200;" disabled>
            <textarea style="width: 600px; height: 200px;" name="txtResContenido"></textarea>
            <br>
            <br>
            <p style="text-align: left;">Fecha: </p>&nbsp;<input type="text" name="txtFechaRes" style="width: 200;" id="fechaactual">
            <input type="text" class="control input text" name="txtUsuarioId" id="aqui" value="<?php echo $_POST['titulo'] ?>">
            <br>
            <br>
            <button class="button" name="RegRes">Registrar Respuesta</button>
            <script>
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;
            document.getElementById("fechaactual").value = dateTime;
            </script>
        </div>
        </form>
        <button class="button" name="RegRes2" onclick="aviso()">Registrar Respuesta</button>
        <script>
            function aviso(){
                alert("Para enviar una respuesta al este post primero debe iniciar sesion");
            }
        </script>

        </div>
    </div>

    
</body>
<footer></footer>
</html>