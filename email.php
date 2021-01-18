<?php


$nome = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];


$headers = "From: ". $nome;

$corpoemail = '<b>Fale Conosco - E-mail Dev</b>
			
			   Nome: '   .$nome.' /n
			   Email:'   .$email.'/n
			   Mensagem:'.$msg.' /n';




if(mail("ueverton.souz@gmail.com", "Webmail dev",$corpoemail,$headers)){


 	   echo "<script>alert('Mensagem enviada com sucesso!');</script>";	
 	   header("Location: index.php");

} else{

      echo "<script>alert('Erro ao enviar, tente novamente!');</script>";	

}