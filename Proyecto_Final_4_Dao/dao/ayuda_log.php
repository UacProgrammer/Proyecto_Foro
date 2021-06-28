<!DOCTYPE html >
<html>
<head>
    <nav>
        <div>
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
    <br>
    <br>
    <div style="place-items: center;align-items: center;text-align: left; width: 400px;margin-left: auto;margin-right: auto;">
        <label>Nombre:</label> <input type="text" style="width: 200px;">
        <br>
        <br>
        <label>&nbsp; Correo:</label> <input type="text" style="width: 200px;">
        <br>
        <br>
        <label>Razon:</label>
        <br>
        <textarea style="margin-left: 60px; width: 350px; height: 200px; resize: none;"></textarea>
        <br>
        <br>
        <br>
        <button class="button" style="margin-left: 40%;">Enviar</button>
    </div>
    
</body>
</html>