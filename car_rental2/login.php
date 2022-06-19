<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>espace administrateures</title>
	<link rel="stylesheet" href="CSS/test.css">
</head>
<body class="body_login">

        <form method="POST" action="connexion.php" id="form_login">

        	<h1 id="titr_login">Espace Administrateures:</h1>

        		<input type="text" name="email" placeholder="Votre Email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'];?>"><br><br>       	
        		
        	    <input type="password" name="password" placeholder="Votre Mot de passe" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>"><br><br>        	
        	<!--en cas ou l'utilisateur veut se reconnecter les varriables des cookies qui on l'email et la mot de passe vont étre ecrit par defaut
			il n'est pas besoin de les réinserer cela va etre execter par codition que l'utilisateur a deja entrer son email et mot de passe-->
        		<input type="checkbox" name="check" id="check">
        		<label for="check">se souvenir de moi</label><br><br>
        	         		
                <td style="align:'center'"><br><input type="submit" value="Se Connecter" ></td>
                 	

        </form>

</body>
</html>