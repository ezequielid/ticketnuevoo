<?php 

include("con_db.php");

if (isset($_POST['register'])){
	if (strlen($_POST['nombre']) >= 0 && strlen($_POST['email']) >= 1){
		$nombre= trim($_POST['nombre']);
		$passwd= trim($_POST['passwd']);
		$email= trim($_POST['email']);
		$legajo= trim($_POST['legajo']);
		$exiteee = mysqli_query($conex,"SELECT usuario as usuario FROM registroticket.registro where usuario = '$nombre'") ;
		$exit= $exiteee->fetch_assoc();
		if($exit['usuario']==''){
			$consulta = "INSERT INTO registroticket.registro(usuario, passwd, correo, legajo) VALUES ('$nombre', '$passwd', '$email', $legajo)";
			$resultado = mysqli_query($conex,$consulta);	

			if ($resultado) {
				$existe = mysqli_query($conex,"SELECT * from registroticket.registro where usuario = '$nombre' ");
				$followingdata = $existe->fetch_assoc();
				if($followingdata['usuario']>0)
				{
				?> 
					<h3 class="ok">¡Se guardo correctamente!</h3>
					
				<?php
				
				//envio de correo*
				//armo html del mail
					
					$htmlText .= "<br>Usuario: " . $nombre;
					$htmlText .= "<br>Email: " . $email;
					$htmlText .= "<br>legajo: " . $legajo;
								
					$htmlText .= "</body></html>";

					include("enviarCorreo.php");
					
					$mail->addAddress('etorres@generalroca.gob.ar', 'etorres@generalroca.gob.ar');
					$mail->addAddress($email, $email);
					$mail->Subject = 'Inscripcion al sistenma de Tickets';
					$mail->Body = $htmlText;
					$mail->send();
					//*********** */
				}
			} else {
				?> 
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
			}

		}else{
			?> 
			<h3 class="bad">Ya existe una inscripcion para ese Usuario </h3>
			<?php
				
		}
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }

}

?>
