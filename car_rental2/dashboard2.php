
<!doctype html>
<html>
<head>
<title>dashboard2</title>
<link rel="stylesheet" href="CSS/styledashboard2.css">
</head>
<body>
<div class="container1">
<div class="log_out">
    <a href="deconnexion.php" class="deconnexion">Se Deconnecter</a>
</div>
<div class="container2">
<div class="barre">
    <a href="dashboard1.php" target="_blank" class="ajout">ajouter une voiture</a>
    
  <!--  <span class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
</span>

    <span class="filtrage">
     <select>
         <option>filtrer</option>
         <option>par ordre alphabétique</option>
         <option>par vitesse max</option>
     </select>


    </span>-->
</div>
<div class="titre_liste"><h1>Liste des voitures:</h1></div>
<div class="container_tab">
<table>
<tr>
<th>idantifiant</th>
<th>mark</th>
<th>couleur</th>
<th>model</th>
<th>vitesse_max</th>
<th>Action1</th>
<th>Action2</th>
</tr>
<?php

$connnecte=mysqli_connect("localhost","root","","gestion_cars");

$exec='SELECT *FROM voitures';
$contenuVoitures=mysqli_query($connnecte,$exec);
while($ligne=mysqli_fetch_array($contenuVoitures)){?>

<tr>;
<td>;
<?php $ligne['id_care'];?>
</td>;

<td>;
<?php $ligne['mark'];?>
</td>;

<td>;
<?php $ligne['couleur'];?>
</td>;

<td>;
<?php $ligne['model'];?>
</td>;

<td>;
<?php $ligne['vitesse_max'];?>
</td>;
<td>;

<span class="delete"><a href="delete.php?supCar=<?php echo $ligne[0];?>" target="_blank">supprimer</a></span>';
</td>;
<td>;
<span class="edite"><a href="delete.php?supCar=<?php echo $ligne[0];?>" target="_blank">modifier</a></span>';
</td>;
</tr>;

<?php
}
?>




</table>



</div>


</div>

</div>
</body>
</html>
