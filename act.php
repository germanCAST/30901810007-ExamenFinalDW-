<?php
session_start();

$id_para_actualizar = $_SESSION["id_ses"];
echo "<h1> ID PARA ACTUALIZAR ES : ".$id_para_actualizar."</h1>";

    $dpi2 = $_POST["cui2"]; 
    $user2 = $_POST["nombre_US2"];
    $apell2 = $_POST["apell_US2"];
    $fech2 = $_POST["fecha2"];
    $direc2 = $_POST["direct2"];
    $n_ma2 = $_POST["nombre_m2"];
    $n_pa2 = $_POST["nombre_p2"];
    $corre2 = $_POST["correo2"];


    $conexion=mysqli_connect("mysql5045.site4now.net","a7c195_german2","GFernando14","db_a7c195_german2");

    // UPDATE `db_a7c195_german2`.`pac_hosp` SET `nom_pac` = 'Alejandro', `ap_pac` = 'Juan' WHERE idpac_ho = '1';UPDATE `db_a7c195_german2`.`pac_hosp` SET `nom_pac` = 'Alejandro', `ap_pac` = 'Juan' WHERE idpac_ho = '1';

    $consulta="UPDATE pac_hosp SET pac_cui ='$dpi2', nom_pac = '$user2' , ap_pac = '$apell2' , fecha_nac = '$fech2' , dir_pac = '$direc2', n_mad = '$n_ma2' , n_pad = '$n_pa2' , cor_user = '$corre2' WHERE idpac_ho = '$id_para_actualizar' ";
    $resultado=mysqli_query($conexion,$consulta);
  

if($resultado >= 1 ){

    echo "<script> alert('Actualizacion realizada con exito')</script>";
    include("index.html");
    exit;
    session_destroy();

    

}else{

    echo "<script> alert('Sucedio un error')</script>";
    
    exit;


}


mysqli_close($conexion);




    // echo "<br>".$dpi;
    // echo "<br>".$user;
    // echo "<br>".$apell;
    // echo "<br>".$fech;
    // echo "<br>".$direc;
    // echo "<br>".$n_ma;
    // echo "<br>".$n_pa;
    // echo "<br>".$corre;



?>