<?php 

session_start();

if(!isset($_SESSION['email'])){//tester si seesion email exist si non en va le rediriger vers la page de login
	header('location:login.php');//rediriger vers la page de login
}else{//toute la page sera afficher si la session existe

?>



<!doctype html>
<html>

<head>
<link rel="stylesheet" href="CSS/test.css">


    <title>dashboard</title>

</head>

<div class="deconexion">
    <a href="deconnexion.php" class="deconnexion">Se Deconnecter</a>
</div>

<body id="body_dashboard">
   
 <h1 id="gestion">gestion des produits:</h1>

<!-- //*********************formulaire INSERTION des voitures*********************// -->

<form  method="POST" action="actions.php" class="form_dashboard">

<h1 id="titr_form" >Insertion d'une nouvelle voiture:</h1>

<label for="mark">
    Entrez la mark de la voiture:
    <input type="text" name="mark" id="mark">
</label><br><br>

<label for="couleur">
    Entrez la couleur de la voiture:
    <input type="text" name="couleur" id="couleur">
</label><br><br>

<label for="model">
    Entrez le model de la voiture:
    <input type="text" name="model" id="model">
</label><br><br>

<label for="vitesse_max">
    Entrez la vitesse max de la voiture:
    <input type="text" name="vitesse_max" id="vitesse_max">
</label><br><br>

<input type="submit" value="Ajouter">
</form>
 
<!-- //*********************formulaire de MODIFICATION*********************// -->

<form  method="POST" action="actions.php" class="form_dashboard">
<h1 id="titr_form">Modification d'une voiture:</h1>

<label for="id_care">
    Entrez l'id de la voiture à modifier:
    <input type="text" name="id_care" id="id_care">
</label><br><br>

<label for="mark1">
    Entrez la mark:
    <input type="text" name="mark1" id="mark1">
</label><br><br>

<label for="couleur1">
    Entrez a couleur:
    <input type="text" name="couleur1" id="couleur1">
</label><br><br>

<label for="model1">
    Entrez le model:
    <input type="text" name="model1" id="model1">
</label><br><br>

<label for="vitesse_max1">
    Entrez la vitesse max:
    <input type="text" name="vitesse_max1" id="vitesse_max1">
</label><br><br>
<input type="submit" value="Modifier">
    </form>

<!-- //*********************formulaire SUPPRESSION*********************// -->
<form  method="POST" action="actions.php" class="form_dashboard">
<h1 id="titr_form" >Suppression d'une voiture:</h1>
<label for="id_care1">
    Entrez l'id de la voiture à supprimer:
    <input type="text" name="id_care1" id="id_care1">
</label>
<input type="submit" value="supprimer">
</form> 
<h1 id="gestion">gestion des administrateures de la page:</h1>

<!-- //*********************formulaire INSERTION des administrateures*********************// -->

<form  method="POST" action="actions.php" class="form_dashboard">

<h1 id="titr_form" >Insertion d'un nouveau administrateure de la page:</h1>

<label for="nom_admin">
    Entrez le nom de l'admin:
    <input type="text" name="nom_admin" id="nom_admin">
</label><br><br>

<label for="prenom_admin">
    Entrez le prenom de l'admin:
    <input type="text" name="prenom_admin" id="prenom_admin">
</label><br><br>

<label for="adresse">
    Entrez l'addresse de l'admin:
    <input type="text" name="adresse" id="adresse">
</label><br><br>

<input type="submit" value="Ajouter">
</form>
<?php
try{
	$conn = new PDO("mysql:host=localhost;dbname=gestion_cars;port=3306;charset=utf8",'root','');
   }catch(Exception $e){
echo 'Erreur de connection:'.$e->getMessage();}
  //***********************affichage des admin********************************** */    
  $contenuadmin = $conn->query('SELECT * FROM administarateurs');//la varriable client pointe sur la premiére ligne de notre base de donnée client

  echo '<table>';
  echo '<tr>';
  
      echo '<td>';
      echo 'id_admin';
      echo '</td>';
  
      echo '<td>';
      echo 'nom';
      echo '</td>';
  
      echo '<td>';
      echo 'prenom';
      echo '</td>';
  
      echo '<td>';
      echo 'adresse';
      echo '</td>';
  
      echo '</tr>';
  
  while($ligne =$contenuadmin->fetch()){//le contenu de chaque ligne va etre stocker dans $ligne a l aide de la methode fetch
  
      echo '<tr>';
  
      echo '<td>';
      echo $ligne['id_admin'];
      echo '</td>';
  
      echo '<td>';
      echo $ligne['nom_admin'];
      echo '</td>';
  
      echo '<td>';
      echo $ligne['prenom_admin'];
      echo '</td>';
  
      echo '<td>';
      echo $ligne['adresse'];
      echo '</td>';
  
      echo '</tr>';
  
               }
  echo '</table>';
     
 ?>
      
</body>

</html>
<?php 
 } 
 ?>