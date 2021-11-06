<?php
    $dpi = $_POST["cui"]; 
    $user = $_POST["nombre_US"];
    $apell = $_POST["apell_US"];
    $fech = $_POST["fecha"];
    $direc = $_POST["direct"];
    $n_ma = $_POST["nombre_m"];
    $n_pa = $_POST["nombre_p"];
    $corre = $_POST["correo"];


    $conexion=mysqli_connect("mysql5045.site4now.net","a7c195_german2","GFernando14","db_a7c195_german2");
//SELECT * FROM pac_hosp WHERE pac_cui = '2014203201023' AND cor_user = 'correo@correo.com';

    $consulta="SELECT * FROM pac_hosp where pac_cui = '$dpi'  AND cor_user= '$corre' ";

    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado);

if($filas){

    echo "<script> alert('El usuario existe, intente con otro')</script>";
    include("index.html");
    exit;




    

}else{

    //INSERT INTO `db_a7c195_german2`.`pac_hosp` (`pac_cui`, `nom_pac`, `ap_pac`, `fecha_nac`, `dir_pac`, `n_mad`, `n_pad`, `cor_user`) VALUES ('202', 'Carlos', 'Illescas', ' 2021-11-12T11:56 ', 'Mazate', 'Karla', 'Carlos', 'carlos@gmail.com');UPDATE `db_a7c195_german2`.`pac_hosp` SET `fecha_nac` = ' 2021-11-12T11:56  ', `dir_pac` = '1ra calle  ', `n_mad` = 'Juana  ', `n_pad` = 'Pedro  ' WHERE (`idpac_ho` = '1');

    $consulta2="INSERT INTO pac_hosp (pac_cui, nom_pac, ap_pac, fecha_nac, dir_pac, n_mad, n_pad, cor_user) VALUES ('$dpi', '$user', '$apell', '$fech', '$direc', '$n_ma', '$n_pa', '$corre')" ;

    $resultado2=mysqli_query($conexion,$consulta2);

//Inicio IF



if($resultado2 >= 1 ){

    echo "<script> alert('Registro realizado con exito')</script>";
    include("index.html");
    exit;
    session_destroy();

}else{
    echo "<script> alert('Sucedio un error')</script>";
    exit;



    
}







//Fin IF



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