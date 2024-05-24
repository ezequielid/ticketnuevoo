 <!----<?php
        $banner_images = array("banner1.png", "banner2.png", "banner3.png", "banner4.png");
        shuffle($banner_images);
        for($i=0;$i<count($banner_images); $i++){
            ?>
            <div class="item <?php if($i==0) {echo 'active';}?>">
            <?php foreach ($banner_images as $iImg => $sNombre)
      {
          ?><img src="<?=$path;?><?=$sNombre;?>" alt="<?=$sNombre;?>" style="/width:10em;"/><?php
      }
      ?>
    </div>--->
    <?php
   }
   <!--- <img src="<?php echo $banner_images[0]; ?>" alt="Banner dinámico"> -->
   ?> 
   	<?php
					echo "<h3 class='ok'> el usurio registrado es  ".$followingdata['idusuario']."</h3>";
					
					//envio de correo*
					//armo html del mail
					$htmlText  = "<html><body><h2>NumeroMesa: ".$followingdata['idusuario']."</h2>";
					$htmlText .= "</body></html>";

					include("enviarCorreo.php");

					$mail->addAddress('ezequiellinkup@gmail.com', 'ezequiellinkup@gmail.com');
					$mail->Subject = 'Usuario registrade!';
					$mail->Body = $htmlText;
					$mail->send();
					//*********** */
                    ?>


<header>   
		<nav>
			<ul>
				<li><a href="#" target="_blank">Web Municipal</a></li>
				<li><a href="#">Enlace 2</a></li>
				<li><a href="#">Enlace 3</a></li>
			</ul>
		</nav>
</header>

<main>	
	</main>

<footer>
		<p>reservados </p>
</footer>
   