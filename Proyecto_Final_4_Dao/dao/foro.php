<!DOCTYPE html>
<html>
<head>

    <nav>
        <div >
            <a href="../index.html">Inicio</a>
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
    <button type="button" name="regPregunta" class="button" style="float: right;" onclick="alerta()">Iniciar una nueva pregunta</button>
    <script>
        function alerta(){
            alert("Para iniciar una nueva pregunta primero debe iniciar sesion");
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
    <form method="post" action="../dao/publicaciones.php">
    
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
            echo "<button name='titulo' href='../dao/publicaciones.php' style='font-size: 25px; border-color:transparent; background-color:transparent; color: #6D7781;' value='";
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
    
</body>
<footer></footer>
</html>