<?php
     $con = mysqli_connect("localhost","root","","pet_kalil");

     if (mysqli_connect_errno()) {
     	echo "Falha na conexão com o serviço MySQL: " . mysqli_connect_error();
     } else {
     	echo "Conexão OK!";
     }

?>

