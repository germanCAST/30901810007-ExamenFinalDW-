<?php
session_start();

$id_EVAL = $_REQUEST['id'];

$_SESSION["id_ses"] = $id_EVAL;

$conexion=mysqli_connect("mysql5045.site4now.net","a7c195_german2","GFernando14","db_a7c195_german2");                    
// Attempt select query execution
$sql = "SELECT * FROM pac_hosp WHERE idpac_ho = '$id_EVAL' ";

$resultado=mysqli_query($conexion,$sql);

$fila = mysqli_fetch_array($resultado);

$cui = $fila['pac_cui'];
$nom = $fila['nom_pac'];
$ap = $fila['ap_pac'];
$fech = $fila['fecha_nac'];
$dir = $fila['dir_pac'];
$nmad = $fila['n_mad'];
$npad = $fila['n_pad'];
$corr = $fila['cor_user'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Para Registro de Usuarios</title>
</head>
<body>
        <h1>Editar valores de una cliente</h1>
        <div class="formulario">
    <form action="/act.php"  method="post" >
        CUI: <input type="text" name="cui2" value =" <?php echo $cui; ?> " required/><br/><br/>
        Nombres: <input type="text" name="nombre_US2" value =" <?php echo $nom; ?> " required /><br/><br/>
        Apellidos: <input type="text" name="apell_US2" value =" <?php echo $ap; ?> " required /><br/><br/>
        Fecha de Nacimiento: <input type="text" name="fecha2" value =" <?php echo $fech; ?> " required /><br/><br/>
        Direccion: <input type="text" name="direct2" value =" <?php echo $dir; ?> " required /><br/><br/>
        Nombre de la madre: <input type="text" name="nombre_m2" value =" <?php echo $nmad; ?> " required /><br/><br/>
        Nombre del papa: <input type="text" name="nombre_p2" value =" <?php echo $npad; ?> " required /><br/><br/>
        Correo: <input type="email" name="correo2" value =" <?php echo $corr; ?> " required /><br/><br/>
        <input type="submit" value ="Actualizar"/><br/><br/>
    </form>
    </div>  



 <footer>
    <h1>German Castellanos - 3090_18_10007</h1>
 </footer>   
</body>
</html>





