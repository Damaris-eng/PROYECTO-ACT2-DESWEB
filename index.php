<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captura de Datos</title>
<script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="dive">
  <h1>Captura de datos personales</h1>  
  <br>
  <h2>Ingresa los datos que se te piden</h2>
  <br>
  <p>Mi primera encuesta</p>
  <hr>

<form action="resultados.php" method="POST">
     <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre">
       <br><br> 
     <label for="edad">Edad:</label> 
       <input type="number" id="edad" name="edad"> 
       <br><br>
        <label for="ciudad">Ciudad donde vives:</label> 
        <input type="text" id="ciudad" name="ciudad"> 
        <br><br> 
        <label for="pasatiempo">Pasatiempo favorito:</label> 
        <input type="text" id="pasatiempo" name="pasatiempo"> 
        <br><br> 
  
<button type="submit">Ingresar Datos</button>
</form>
</div>
</body>
</html>
