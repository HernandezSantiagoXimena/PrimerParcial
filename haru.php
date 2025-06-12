<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ximena Hernandez</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
<link href="https://fonts.cdnfonts.com/css/maulysia" rel="stylesheet">
        
  <nav class="navbar navbar-light" style="background-color: #f5cac3;">
  
  
    <div class="contener">
      <a class="navbar-brand" href="" style="color: #ff4d6d;">Inicio</a>
      <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
      
      <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Unidad 1
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="dropdown-item" href="/miau/index.php">Practica 1</a><br>
          <a href="dropdown-item" href="/miau/index.php">Practica 2</a><br>
          <a href="dropdown-item" href="/miau/index.php">Practica 3</a><br>
         </div>
        </li>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Unidad 2
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="dropdown-item" href="/ximena.html">Practica 4</a><br>
          <a href="dropdown-item" href="/XIMENA.html">Practica 5</a><br>
          <a href="dropdown-item" href="/ximena.html">Practica 6</a><br>
         </div>
        </li>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Unidad 3
         </a>
         <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a href="dropdown-item" href="/ximena.html">Practica 7</a><br>
          <a href="dropdown-item" href="/ximena21.html">Practica 8</a><br>
          <a href="dropdown-item" href="/ximena5.html">Practica 9</a><br>
          <a href="dropdown-item" href="/ximena7.html">Practica 10</a><br>
         </div>
        </li>
       </ul>
       </div>
      </div>
     

  <div class="jumbotron" style="background-color: #ff4d6d;">
    <h1 class="display-4" style="text-align: center;
      font-family: 'Maulysia', sans-serif;" >Hallooo!!!</h1>
   </div>


   <h1>Datos de la tabla de personajes</h1>
    <?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = "ximena";

    $conexion = new mysqli($servername, $username, $password, $database);
    if ($conexion->connect_error) {
        die("Conexión Fallida: " . $conexion->connect_error);
    }

    $sql = "SELECT * FROM setters";
    $resultado = $conexion->query($sql);
    if($resultado->num_rows >0){
    echo "<table>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Apodo</th><th>Equipo</th><th>Posicion</th><th>Altura</th><th>Peso</th><th>Numero</th><th>Edad</th><th>Nacionalidad</th><th>Puntos</th></tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apodo"] . "</td><td>" . $row["equipo"] . "</td><td>" . $row["posicion"] . "</td><td>" . $row["altura"] . "</td><td>" . $row["peso"] . "</td><td>" . $row["numero"] . "</td><td>" . $row["edad"] . "</td><td>" . $row["nacionalidad"] . "</td><td>" . $row["puntos"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros en la base de datos";
}
$conexion->close();
    ?>
   </div>
</body>
</html>