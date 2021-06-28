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
            if($_SESSION['username']=="Tinta@gmail.com" || $_SESSION['username']=="ozzy@gmail.com" || $_SESSION['username']=="Seen@gmail.com"){
                echo "<script> document.getElementById('Info_Admin').style.display='block'; </script>";
            }
            ?>
        </div>
        <hr style="margin-top: auto; width: 100%;">
    </nav>
    <link rel="stylesheet" href="../css/style.css">
    <button type="button" name="regPregunta" class="button" style="float: right;" onclick="mostrar()">Iniciar una nueva pregunta</button>
    <script>
        function mostrar(){
            document.getElementById("box_preg").style.display="block";
        }
    </script>
    <br>
    <br>
</head>
<body>
    <script>
        focusMethod = function getFocus() {
            document.getElementById("cuadrop").focus();
        }
    </script>
    <br>

    <!--
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;" class="cuadros_preguntas">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block;" onclick="focusMethod()" id="cuadrop">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    <div style="border-color: white; border-width: 2px; border-style: ridge; width: 700px; margin-left: 30%;">
        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
            <a href="" style="text-align: c; font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
            <p style="text-align: left;">La descripcion va aqui</p>
        </div>
        <div style="display: inline-block; text-align: right;float:right">
            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
        </div>
    </div>
    -->
    <div>
        <img src="" alt="">
    </div>
    <!--Probamos otro metodo-->
    <form method="post" action="../dao/publicaciones_log.php">
    
    <?php
    
        echo "<p hidden>";
        include ('../dao/DAO/publicaciones/PublicacionesDAO.php');
        $dao = new PublicacionesDAO();
        print_r($dao->Listar());
        $conexion=mysqli_connect('localhost','root','','foro_rebeldes');
        $sql= "select * from publicaciones";
        $res=mysqli_query($conexion,$sql);
        echo "</p>";
        echo "<div style='display: flex;align-items: center; justify-content: center; width: 100%;'>";
        echo "<div style='text-align: center;'>";
        echo "<table style='display: table; text-align: center; flex-direction: center; border-radius: 6px; border-style: outset;color: #6D7781;' class='styled-table'>";
        
        while($fila=mysqli_fetch_array($res)){

            echo "<tr>";
            echo "<td>";
            echo "<label value='";
            echo $fila['post_id'];
            echo "'>";
            echo $fila['post_id'];
            echo "</label>";
            echo "</td>";
            echo "<td style='box-sizing: border-box;'>";
            echo "<div style='text-align: center; width: fit-content;display: inline-block; ''>";
            echo "<button name='titulo' href='publicaciones_log.php' style='font-size: 25px; border-color:transparent; background-color:transparent; color: #6D7781;' value='";
            echo $fila['post_id'];
            echo "'>";
            echo $fila['post_titulo'];
            echo "</button>";
            echo "<hr style='width: 100%'>";
            echo "<p style='text-align: left;'>";
            echo $fila['post_contenido'];
            echo "</p>";
            echo "</div>";
            echo "<div style='display: inline-block; text-align: right;float:right'>";
            echo "<p>";
            echo "Usuario:";
            echo $fila['usuario_id'];
            echo "</p>";
            echo "</div>";
            echo "</td>";
            echo "<td>";
            echo "";
            echo "</td>";
            echo "</tr>";
  
            
        }
        echo "</table>";
        mysqli_free_result($res);
        mysqli_close($conexion);
    ?>
    </form>
    <!--
    <div style="display: flex;align-items: center; justify-content: center; width: 100%;">
        <div style="text-align: center;">
            <table style="display: table; text-align: center; flex-direction: center; border-radius: 6px; border-color: white; border-style: outset;">
                <tbody>
                    <tr>
                        <td style="box-sizing: border-box;">
                        <div style="text-align: center; width: fit-content;border-style: ridge;border-color: greenyellow;display: inline-block; ">
                            <a href="TE REDIRECCIONA A" style="font-size: 25px; ">Que aplicacion es mejor para mezclar musica?</a>
                            <p style="text-align: left;">La descripcion va aqui</p>
                        </div>
                        <div style="display: inline-block; text-align: right;float:right">
                            <p>Usuario:<?php //aqui metemos el nombre del usuario ?></p>
                        </div>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    -->
    <?php
    if(isset($_POST['Registrar_preg'])){
        if(!empty($_POST['categoria'])) {
            $selected=$_POST['categoria'];
            $_SESSION['select']=$selected;
        }
        $usuarioid=$_POST['id_usuario'];
        $catid=$_SESSION['select'];
        $posttitulo=$_POST['preg_titulo'];
        $postcontenido=$_POST['preg_contenido'];
        $postfecha=$_POST['preg_fecha'];
        $query="INSERT INTO publicaciones VALUES (null,'$usuarioid','$catid','$posttitulo','$postcontenido','$postfecha')";
        $con=mysqli_connect('localhost','root','','foro_rebeldes');
        if($con->query($query)==true){
            echo "<script> alert('Se inserto correctamente'); </script>";
        }else{
            echo "<script> alert('No se inserto correctamente'); </script>";
        }
    }
    ?>
    <form method="post">
        <div id="box_preg" hidden>
            <input type="text" hidden name="id_usuario" value="<?php echo $_SESSION['titu']; ?>">
            <br>
            <p >Seleccione la categoria: </p>
            <select name="categoria">
                <option value="1" selected>Rock</option>
                <option value="2">Electronica</option>
                <option value="3">Pop</option>
                <option value="4">Indie</option>
                <option value="5">Instrumental</option>
            </select>
            <br>
            <br>
            Ingrese el titulo de su pregunta: <input name="preg_titulo">
            <br>
            <br>
            Ingrese el contenido de su pregunta:
            <br>
            <br>
            <textarea name="preg_contenido" style="width: 600px; height: 200px;"></textarea>
            <br>
            <br>
            <input type="text" name="preg_fecha" id="preg_fecha" disabled style="width: fit-content;">
            <br>
            <br>
            <br>
            <button class="button" name="Registrar_preg">Registrar Pregunta</button>
            <script>
            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var dateTime = date+' '+time;
            document.getElementById("preg_fecha").value = dateTime;
            </script>
        </div>
    </form>
    <br>
    <br>
    <br>
</body>
<footer></footer>
</html>