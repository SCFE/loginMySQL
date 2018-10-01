<?php require 'database.php'; 

$mensaje ='';



if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['usuario']) && !empty($_POST['correo']) && !empty($_POST['contraseña']) /*&& !empty($_POST['password-confirm'])*/)
{

    $query = 'INSERT INTO usuarios (id,nombre, apellido, usuario, correo, contraseña) 
    VALUES (:nombre,:apellido,:usuario,:correo,:contraseña )';

    $estado = $mbd->prepare($query);
    $estado->bindParam(':nombre', $_POST['nombre']);
    $estado->bindParam(':apellido', $_POST['apellido']);
    $estado->bindParam(':usuario', $_POST['usuario']);
    $estado->bindParam(':correo', $_POST['correo']);
    $password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT) ;
    $estado->bindParam(':contraseña',$password);

    /*$vector = array(
        ':nombre'=> $_POST['nombre'],
        ':apellido'=> $_POST['apellido'],
        ':usuario'=> $_POST['usuario'],
        ':correo'=> $_POST['correo'],
        ':contraseña'=>$password);
*/
  /*  if($estado->execute($vector))
    {
        $mensaje = 'Se creo un usuario satisfactoriamente';
    }
    else
    {
        $mensaje = 'Ha ocurrido un error al crear usuario';
    }
*/
}



?>
<!DOCTYPE HTML>
<Html>
<head>
<title>Registro</title>
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/Styles.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php if(!empty($mensaje)):?>
<p>  <?=$mensaje?> </p> 
<?php endif; ?>

    <h1 class="text-center">Registrate</h1>

    <form action="signup.php" method="post">
    <div class="form-group">
    <input type="text" name="nombre" placeholder="Ingresa tu nombre">
    </div>
    <div class="form-group">
    <input type="text" name="apellido" placeholder="Ingresa tu apellido">
    </div>
    <div class="form-group">
    <input type="text" name="usuario" placeholder="Ingresa tu usuario">
    </div>
    <div class="form-group">
    <input type="email" name="correo" placeholder="Ingresa tu email">
    </div>
    <div class="form-group">
    <input type="password" name="contraseña" placeholder="Ingresa tu password">
    </div>
   <!-- <div class="form-group">
    <input type="password" name="password-confirm" placeholder="Confirma tu password">
    </div>-->
    <input  class="btn btn-outline-dark" type="submit" value="send">
    </form>
</body>
</HTML>