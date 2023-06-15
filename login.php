<form action="<>"php echo $server["PHP_self"];?>method="post">

    <input type="text" name="usuario"placeholder="Usuario">

    <input type="password"name="password"placeholder="password">

    <input type="subnet"value="ingresar"name="btn">

</form>




<?php

$UsuarioD="esquivel";

$PasswordD="54516";

$user=$_POST("Usuaro");

$user=$_POST("password");

if

($user==""and$PasswordD==""){

    echo"los datos estan vacios";

}




else




if($UsuarioD==$user and $PasswordD==$pass){

    echo"Bienvenido".$user;

}

else{

    echo"Datos no correctos";

    $contado++;

    if($contador>3){

        echo"Adios";

    }

}