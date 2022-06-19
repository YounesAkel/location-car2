

<?php

try{
	$conn = new PDO("mysql:host=localhost;dbname=gestion_cars;port=3306;charset=utf8",'root','');
   }catch(Exception $e){
echo 'Erreur de connection:'.$e->getMessage();}


	//*********************INSERTION d'une nouvelle voiture*********************//

	if(isset($_POST['mark']) && isset($_POST['couleur']) && isset($_POST['model']) && isset($_POST['vitesse_max'])){
		if(!empty($_POST['mark']) && !empty($_POST['couleur']) && !empty($_POST['model']) && !empty($_POST['vitesse_max'])){
				
				$mark = htmlspecialchars($_POST['mark']);
				 $couleur = htmlspecialchars($_POST['couleur']);
			$model = htmlspecialchars($_POST['model']);
			 $vitesse = htmlspecialchars($_POST['vitesse_max']);

				 $insertionvoiture = $conn->prepare('INSERT INTO voitures(mark,couleur,model,vitesse_max) VALUES(?,?,?,?)');//on a utiliser la methode prepare car on a des varriables
				 $insertionvoiture->execute(array($mark, $couleur,$model,$vitesse));//pour l'insertion des nouveaux lignes 

			 echo 'La voiture a été bien ajouté !!';
        } else echo 'veuiller remplir tous les champs de la voiture';
	}
        
		//*********************MODIFICATION*********************//

//bindparam() permet de lier un colonne a une parametre
		if(isset($_POST['id_care']) && isset($_POST['mark1']) && isset($_POST['couleur1']) && isset($_POST['model1']) && isset($_POST['vitesse_max1'])){
			if(!empty($_POST['id_care'])  &&!empty($_POST['mark1']) && !empty($_POST['couleur1']) && !empty($_POST['model1']) && !empty($_POST['vitesse_max1'])){
				
		 		$idCar = htmlspecialchars($_POST['id_care']);
		 		$mark1 = htmlspecialchars($_POST['mark1']);
				 $couleur1 = htmlspecialchars($_POST['couleur1']);
			 $model1 = htmlspecialchars($_POST['model1']);
			 $vitesse_max1 = htmlspecialchars($_POST['vitesse_max1']);
/******************************************************tester si l'id est valide********************************************/ 
				if(filter_var($idCar,FILTER_VALIDATE_INT)){

					$testId = $conn->prepare('SELECT * FROM voitures WHERE id_care = ?');
					$testId->execute(array($idCar));
					$nbLignes = $testId->rowCount();//retourner le nombre de ligne ou se trouve l'id
/****************************************************************************************************************************/
					if($nbLignes != 0){//si le nombre de lignes a ete nulle on executera le code suivant
						$modificationVoiture = $conn->prepare('UPDATE voitures SET mark = :mark , couleur = :couleur , model = :model , vitesse_max = :vitesse_max WHERE id_care = :id_care');

						$modificationVoiture->execute(array("mark" => $mark1,
															"couleur" => $couleur1,
															"model" => $model1,
															"vitesse_max" => $vitesse_max1,
															"id_care"=>$idCar));

					 echo 'Lavoiture a été bien modifié !!';
					}
		 			}else{
						echo 'Cet id n\'existe pas !!';}	
		 		}
				
		 	}
		 

			
		//*********************SUPPRESSION*********************//
		
		 if(isset($_POST['id_care1'])){
		 	if(!empty($_POST['id_care1'])){
				
		 		$idCar1 = htmlspecialchars($_POST['id_care1']);
/******************************************************tester si l'id est valide********************************************/ 
		 		if(filter_var($idCar1,FILTER_VALIDATE_INT)){

		 			$testId = $conn->prepare('SELECT * FROM voitures WHERE id_care = ?');
		 			$testId->execute(array($idCar1));
		 			$nbLignes = $testId->rowCount();
/****************************************************************************************************************************/

		 if($nbLignes != 0){//si le nombre de lignes a ete nulle on executera le code suivant
						
		 				$suppressionCar = $conn->prepare('DELETE FROM voitures WHERE id_care = ?');
		 				$suppressionCar->execute(array($idCar1));
						
		 				echo 'voiture a été bien supprimé !!';
		 			}else{
		 				echo 'Cet id n\'existe pas !!';
		 			}
				

		 		}else{
		 			echo 'Cet id est non valable !!';
		 		}
				
		 	}else{
		 		echo 'Attention, Ce Champ est Obligatoire !!';
		 	}
		 }

	//*********************INSERTION d'un admin*********************//

	if(isset($_POST['nom_admin']) && isset($_POST['prenom_admin']) && isset($_POST['adresse']) ){
		if(!empty($_POST['nom_admin']) && !empty($_POST['prenom_admin']) && !empty($_POST['adresse'])){
			
				 $nom_admin = htmlspecialchars($_POST['nom_admin']);
				 $prenom_admin = htmlspecialchars($_POST['prenom_admin']);
			     $adresse = htmlspecialchars($_POST['adresse']);

				 $insertionadmin = $conn->prepare('INSERT INTO administarateurs(nom_admin,prenom_admin,adresse) VALUES(?,?,?)');//on a utiliser la methode prepare car on a des varriables
				 $insertionadmin->execute(array($nom_admin, $prenom_admin,$adresse));//pour l'insertion des nouveaux lignes 

		 echo 'Le nouvelle administrateure a été ajouter';
		}else echo 'veuiller remplir tous les champs de l\' administrateur';
	} 

	  ?>