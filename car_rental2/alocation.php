<!doctype html>
<html>
<head>
<link rel="stylesheet" href="CSS/test.css">
<title>rent your car</title>

</head>
<body class="alocation_page">
    
   <div class="felicitation">
<div class="recu">
 <?php
 //fichier de traitement des données
 //******************traitement des donnees de formulaire************************************ */

 if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['model']) && isset($_POST['sexe']) && isset($_POST['DateNaissance']) || isset($_POST['numtel']) && isset($_POST['email'])&& isset($_POST['from'])&& isset($_POST['to']))
 {//tester si les element sont disponnible ou non
 	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['model']) && !empty($_POST['sexe']) && !empty($_POST['DateNaissance'])&& !empty($_POST['email'])|| !empty($_POST['numtel'])&& !empty($_POST['from'])&& !empty($_POST['to']))
 	{//tester si les elements sont vide ou non
 		$nom = htmlspecialchars($_POST['nom']);//la fonction htmlspecialchars() est utilisé en raison de securite
 		$prenom = htmlspecialchars($_POST['prenom']);
 		$model = htmlspecialchars($_POST['model']);
 		$sexe = htmlspecialchars($_POST['sexe']);
 		 $numtel = htmlspecialchars($_POST['numtel']);
 		$email = htmlspecialchars($_POST['email']);
		$DateNaissance = htmlspecialchars($_POST['DateNaissance']);
		$from = htmlspecialchars($_POST['from']);
		$to = htmlspecialchars($_POST['to']);



if(preg_match("#^[a-zA-Z]+$#", $nom)&&preg_match("#^[a-zA-Z]+$#", $prenom)&&preg_match("#^0[67][0-9]{8}$#", $numtel)){

	/*try{
	$conn = new PDO("mysql:host=localhost;dbname=gestion_cars;port=3306;charset=utf8",'root','');
	$sql=$conn->prepare(INSERT INTO client(nom_client,prenom_client,email,model,gender,date_de_naissance,debut_alocation,fin_alocation) VALUES(?,?,?,?,?,?,?,?));
	$sql->execute(array($nom,$prenom,$email,$model,$sexe,$DateNaissance,$from,$to));
   }catch(Exception $e){
echo 'Erreur de connection:'.$e->getMessage();}*/
		
		echo 'Bonjour monsieur :' . $nom . '   ' . $prenom . ' <br><br>';
		echo 'le modele que vous avez choisis est : ' . $model . '<Br><br>';
		echo 'Votre date de naissance est :' . $DateNaissance . '<br><br><br>'; 
	
     echo    '<h1>Félicitation votre alocation a été effectuer avec succé,<br> votre demande est pret  vous pouvez nous rendre visite si vous avez un moindre des  problémes,
             merci de nous faire confiance notre équipe vous souhaite bon route </h1>';
			 
	}else echo 'veuillez retourner sur le formulaire et verifier si les formats de ces element(nom,prenom,numero de telephone) sont valides:'.'<br>'.
	'votre nom et votre prenom diovent contenir des lettre des "a" jusqu\'a "z"(minuscule ou majuscule)'.'<br>'.
	'votre numero de telephone doit commencer obligatoirement par 06 ou 07 suivit par 8 chiffre ';
//else de if qui teste si les element sont vide
		
 }else echo 'Veuillez retourner sur le formulaire et remplir tous les champs !!';
 
}else//else de if qui teste si les element sont disponible
 echo 'Veuillez retourner sur le formulaire et remplir tous les champs !';
 ?>

 

</body>

</html>
