<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DE INSCRITOS</title>
</head>
<body>
 <h1 style = "text-align:center" >Gestion de Usuarios</h1>


<!-- crud -->

<?php
                    
                    $conexion=mysqli_connect("mysql5045.site4now.net","a7c195_german2","GFernando14","db_a7c195_german2");
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM pac_hosp";


                    if($result = mysqli_query($conexion, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table border='1'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>CUI</th>";
                                        echo "<th>NOMBRES</th>";
                                        echo "<th>APELLIDOS</th>";
                                        echo "<th>FECHA DE NACIMIENTO</th>";
                                        echo "<th>DIRECCION</th>";
                                        echo "<th>NOMBRE DE LA MADRE</th>";
                                        echo "<th>NOMBRE DEL PADRE</th>";
                                        echo "<th>CORREO DEL USUARIO</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['idpac_ho'] . "</td>";
                                        echo "<td>" . $row['pac_cui'] . "</td>";
                                        echo "<td>" . $row['nom_pac'] . "</td>";
                                        echo "<td>" . $row['ap_pac'] . "</td>";
                                        echo "<td>" . $row['fecha_nac'] . "</td>";
                                        echo "<td>" . $row['dir_pac'] . "</td>";
                                        echo "<td>" . $row['n_mad'] . "</td>";
                                        echo "<td>" . $row['n_pad'] . "</td>";
                                        echo "<td>" . $row['cor_user'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='actualizar.php?id=". $row['idpac_ho'] ."' title='ACTUALIZAR'><span> ACTUALIZAR   |</span></a>";
                                            echo "<a href='eliminar.php?id=". $row['idpac_ho'] ."' title='ELIMINAR'><span> |ELIMINAR</span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
                    }
 
                    // Close connection
                    mysqli_close($conexion);

                    ?>
<!-- crud -->














 <footer>
    <h1>German Castellanos - 3090_18_10007</h1>
 </footer>   
</body>
</html>