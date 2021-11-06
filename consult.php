<?php
$conexion=mysqli_connect("mysql5045.site4now.net","a7c195_german2","GFernando14","db_a7c195_german2");
//SELECT * from db_a7c195_german2.pac_hosp where cor_user = 'correo@correo.com';
$consulta="SELECT * FROM pac_hosp where cor_user= '$corre' ";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){

    echo "encontrado";

}


mysqli_close($conexion);
exit;


?>