<?php

include ("conn.php");

if($_POST)
{
	
	$mail		= $_POST["mail"];
	$password	= $_POST["password"];
	


	$query  = $db->query("SELECT * FROM dbtest WHERE dbmail='$mail' && dbpassword='$password' ",PDO::FETCH_ASSOC);

	if ( $say = $query -> rowCount() ){

		if( $say > 0 ){
			session_start();
			$_SESSION['oturum']=true;
			$_SESSION['mail']=$mail;
			$_SESSION['password']=$password;
			
			

			print '<h1>Hoş geldiniz </h1>';
			include("bekleme.html");

			echo '
			 <h4><i>Çok yakında sizlerleyiz </i></h4>
			';

			echo '
			<div> <a class="btn btn-primary" href="logout.php" role="button">Çıkış Yap</a> </div>
			';

		}else{
			echo "Oturum Açılamadı.";
			header('Refresh: 2; url=index.html');
		}
	}else{
		echo "<h1>Kullanıcı adı veya şifre hatalı.</h1>";
		

		header('Refresh: 3; url=index.html');

		
	}
}
?>