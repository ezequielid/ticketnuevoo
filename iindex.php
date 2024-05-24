<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formu</title>
    <link rel="stylesheet" href="stylo.css">
    <style>
    </style>
</head>
<body>

<header>   
		<nav>
			<ul>
				<li><a href="https://www.generalroca.gov.ar" target="_blank">Web Municipal</a></li>
				<li><a href="#">Enlace 2</a></li>
				<li><a href="https://www.generalroca.gov.ar/wp-content/uploads/2023/03/puntos-limpios.jpeg">puntoslimpios</a></li>
                <div class="squarebanner"><a href="http://192.168.11.109/nuevo-form/puntoslimpios.jpg/"><img src="https://www.generalroca.gov.ar/wp-content/uploads/2023/03/puntos-limpios.jpeg>"></a></div>
                <div class="squarebanner"><a href="//"><img src="https://www.generalroca.gov.ar/wp-content/uploads/2023/03/puntos-limpios.jpeg>"></a></div>
            
            </ul>
		</nav>
</header>
<div class="squarebanner"><a href=""><img src=""></a></div>
    <div>
    <form  method="POST"<?php 
        include("registrar.php");
            ?>action="inde.php">
            
        <h1>Mesa de </h1>
        <label >Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
        <label >Password</label>
        <input type="password" id="passwd" name="passwd" required>
        <label >Email</label>
        <input type="email" id="email" name="email" required>
        <label >Legajo</label>
        <input type="legajo" id="legajo" name="legajo" required>
        <?php
			include("con_db.php");
            ?>
    	<input type="submit" name="register" id="register" value="GUARDAR">
    
        <?php 
        include("registrar.php");
            ?>
        </form >
    </div>
    <main>	
	</main>
<br>
    <footer>
		<p>Hola</p>
</footer>
	
</body>
</html>
