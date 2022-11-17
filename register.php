

<?php 
include ("conn.php"); 

if($_POST){ 


    

	
	$name		= $_POST["name"];
	$surname	= $_POST["surname"];
	$mail		= $_POST["mail"];
	$no			= $_POST["no"];
	$password	= $_POST["password"];
	
	
	
	$query = "SELECT * FROM dbtest order by id";
	$goster = $db->prepare($query);
	$goster->execute(); 

	$result = $db->prepare("INSERT INTO dbtest SET dbname=?,dbsurname=?,dbmail=?,dbno=?,dbpassword=?");
	$result->execute(array($name,$surname,$mail,$no,$password));

    
	 ?>


<?php }else{  ?>

	


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>


		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="sweetalert2.all.min.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	</head>
	<body>



		<div class="container">

			<div class="card bg-light">
				<article class="card-body mx-auto" style="max-width: 400px;">
					<h4 class="card-title mt-3 text-center">Hesap Açın</h4>
					<p class="text-center"><i>Müşterimiz Olmak Bir Tık Kadar Uzağınızda</i></p>


					<form  method="POST">
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							</div>
							<input name="name" class="form-control" required placeholder="Adınız" type="text">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-user"></i> </span>
							</div>
							<input  class="form-control"  placeholder="Soyadınız" required type="text" name="surname">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
							</div>
							<input name="mail" class="form-control" required placeholder="E-Postanız" type="email">
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							<select class="custom-select" style="max-width: 120px;">
								<option selected="">+90</option>

							</select>
							<input name="no" class="form-control" required placeholder="Telefon Numaranız" type="text">
						</div> 

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
							</div>
							<input class="form-control" name="password" required placeholder="Şifreniz" type="password">
						</div> 



						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block"> Hesap Oluştur  </button>
						</div> 

						<p class="text-center">Zaten müşterimiz misiniz? <a href="index.html">Giriş Yapın</a> </p>                                                                 
					</form>
				</article>
			</div> 

		</div> 


	</body>
	</html> 

	<?php
if($_POST)
{
    echo '<script>Swal.fire("Başarılı", "Talebiniz Alındı", "success"); </script>';
}
?>



<?php } ?>

