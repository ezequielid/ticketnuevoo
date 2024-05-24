<?php
$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
  header('location: iindex.php');
} else {
  if (!empty($_POST)) {
    if (empty($_POST['usuario']) || empty($_POST['passwd'])) {
      $alert = '<div class="alert alert-danger" role="alert">
  Ingrese su usuario y su clave
</div>';
    } else {
      require_once "con_db.php";
      $user = mysqli_real_escape_string($conex, $_POST['usuario']);
      $clave = md5(mysqli_real_escape_string($conex, $_POST['passwd']));
      $query = mysqli_query($conex, "SELECT usuario, passwd FROM registroticket.registro");
      mysqli_close($conex);
      $resultado = mysqli_num_rows($query);
      if ($resultado > 0) {
        $dato = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['email'] = $dato['correo'];
        $_SESSION['user'] = $dato['usuario'];
       
        header('location: iindex.php');
      } else {
        $alert = '<div class="alert alert-danger" role="alert">
              Usuario o Contraseña Incorrecta
            </div>';
        session_destroy();
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="steel.css">  
  <title></title>
</head>
<header>

</header>
<body>
    <h1>Iniciar Sesión</h1>
     <br>  
        <form method="POST">
           <!--?php/* echo isset($alert) ? $alert : ""; */? --->
                <div class="col-sm">
                <label  for="">Usuario</label>
                <input type="text" placeholder="Usuario" name="usuario"></div>
                </div>
                <br>
                <div class="col-sm">
                <label for="">Contraseña</label>
                <input type="password" placeholder="Contraseña" name="passwd">
</div>
                <br>
                <input type="submit" value="Iniciar" class="btn btn-primary" id="register">

                <hr>
        </form>
                <hr>
                
        </div>
</body>