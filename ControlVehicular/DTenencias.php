<?php
    include("Controlador.php");
    $LineaCaptura = $_GET['LineaCaptura'];
    $SQL = "DELETE FROM Tenencias WHERE LineaCaptura='$LineaCaptura'";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $SQL);
    
    if (mysqli_affected_rows($Con) == 1) {
        print("1 Registro Eliminado");
    } else {
        print(mysqli_error($Con));
    }

    Desconectar($Con);
?>