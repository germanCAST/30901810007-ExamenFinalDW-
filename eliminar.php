<?php
$id_eliminar  = $_REQUEST['id'];

$conexion=mysqli_connect("mysql5045.site4now.net","a7c195_german2","GFernando14","db_a7c195_german2");

    $consulta="DELETE FROM pac_hosp WHERE idpac_ho = ' $id_eliminar '  ";

    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado);
    
    if($resultado >= 1){

        echo "<script> alert('Se eliminó el registro exitosamente ')</script>";
        include("index.html");
        exit;
        
    

    }else {
        echo "<script> alert('Error')</script>";
        exit;
        
    }



    mysqli_close($conexion);


?>