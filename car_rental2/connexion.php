<?php  

session_start();

$_SESSION['email'] = $_POST['email'];

$email = htmlspecialchars($_POST['email']);
$password= htmlspecialchars($_POST['password']);
if(isset($_POST['email']) && isset($_POST['password'])){
//si l'utilisateur a cliquer sue se souvenir de moi des cookies serons créer par les variables super glaubaux session et post
if(!empty($_POST['email'])&&!empty($_POST['password'])){
	if($_POST['password']=="younes"&& $_POST['email']=="younes.akel@e-polytechnique.ma"){
if(isset($_POST['check'])){
	setcookie('email', $_SESSION['email'], time() + 365*24*3600, null, null, false, true);//cette cookies sera expirer dans un ans
	//setcookie(name, value, expire, path, domain, secure, httponly);
	setcookie('password', $_POST['password'], time() + 365*24*3600, null, null, false, true);
}
header('location:dashboard1.php');//rediriger l'utilisateur de la page de login vers son profil		
}else{	
	header('location:login.php');//rediriger l'utilisateur vers la page de login 		
}
}else{	
	header('location:login.php');//rediriger l'utilisateur vers la page de login 		
}
}


?>