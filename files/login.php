<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8"/>
<title>Paradoxal life</title>	
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-responsive.css">
</head> 
<?php include 'header.html'; ?>
<body>
	<?php if (!isset($_POST['id']) && !isset($_POST['mdp'])) {
		
 ?>
	<div id="connect">
<form action="login.php" method="post">
<input type="text" name="id" class="form-control i_form"></br>
<input type="password" name="mdp" class="form-control i_form"></br>
<center><button action="sumbmit" class="btn btn-lg btn-primary">Connect</button></center>
</form>
<?php }
else{
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['mdp'] = $_POST['mdp'];
  echo "<script type='text/javascript'>document.location.replace('admin.php');</script>";
}
?>
</div>

</body>
</html>