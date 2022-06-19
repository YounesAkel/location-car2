
    <?php
    /********************************creation de la base de donnée gestion_cars******************************* */
    
    $conn=mysqli_connect("localhost","root","");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
        $sql='CREATE DATABASE gestion_cars';//requete de creation de la base de donnée
       $execrequete= mysqli_query($conn,$sql);//executer la requete
       if( $execrequete){
           echo 'la base de donne "gestion-cars" a bien ete creer'."<br>";
       }
   
    /*********************creation de la table voitures**** */
    $conn1=mysqli_connect("localhost","root","","gestion_cars");
     $sqla='CREATE TABLE voitures(
            id_care smallint(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            mark varchar(20) not null,
            couleur varchar(20) not null,
            model varchar(20) not null,
            vitesse_max varchar(11) not null)';
        $execrequete1=mysqli_query($conn1,$sqla);
        if($execrequete1){
            echo 'creation de la table voitures a ete faite avec succee'."<br>";
        }
    
    /**insertion des lignes dans la table voiture */

    
    $sqlb='INSERT INTO voitures(mark,couleur,model,vitesse_max) VALUES("toyota","blanc","2020","300km/h") ,
    ("tesla","rouge","model A","300km/h"),
    ("mercedic","blanc","2020","300km/h"),
    ("mercedic","blanc","2020","300km/h"),
    ("tesla","blanc","model S","300km/h"),
    ("ferrari","blanc","2030","300km/h"),
    ("dacia","blanc","2012","100km/h")';
    
    $execrequete2=mysqli_query($conn1,$sqlb);
    
    if($execrequete2){
        echo 'les voitures ont bien ete ajouter'."<br>";
    }
    
    /*********************creation de la table administrateurs**** */
    
    /*
        $sqlc='CREATE TABLE IF NOT EXISTS administarateurs(
            id_admin smallint(6) unsigned auto_increment primary key,
            nom_admin varchar(10) not null,
            prenom_admin varchar(10) not null,
            adresse varchar(10) not null)';
        $execrequete3=mysqli_query($conn,$sqlc);
        if($execrequete3!=true){
            echo 'la table administrateures a  bien ete creer'."<br>";
        }
    /**isertion d'une ligne dans la table administrateur */
    /*
    $sqld='INSERT INTO administarateurs(nom_admin,prenom_admin,adresse) VALUES("akel","younes","agadir")';
    $execrequete4=mysqli_query($conn,$sqld);
    
    /****************creation de la table client****/
  
        $sqle='CREATE TABLE IF NOT EXISTS client(
            id_client smallint(6) unsigned auto_increment primary key,
            nom_client varchar(100) not null,
            prenom_client varchar(100) not null,
            email varchar(100) not null,
            model enum("tesla model A","tesla model S","toyota","volswagen","mercedic 2021") not null,
            gender enum("homme","femme") not null,
            date_de_naissance date not null,
            debut_alocation date not null,
            fin_alocation date not null
            )';
        $execrequete5=mysqli_query($conn1,$sqle);
        if($execrequete5){
            echo 'la table clients a bien ete creer'."<br>";
        }
    mysqli_close($conn);
    ?>
