<?php  
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'pdodb';
            
            try{
                $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE DATABASE pdodb";
                
                $sql = "CREATE TABLE Clients(
                    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    Nom VARCHAR(30) NOT NULL,
                    Prenom VARCHAR(30) NOT NULL,
                    Adresse VARCHAR(70) NOT NULL,
                    Ville VARCHAR(30) NOT NULL,
                    Codepostal INT UNSIGNED NOT NULL,
                    Pays VARCHAR(30) NOT NULL,
                    Mail VARCHAR(50) NOT NULL,
                    DateInscription TIMESTAMP,
                    UNIQUE(Mail))";

                    $sql = "INSERT INTO Clients(Nom,Prenom,Adresse,Ville,Codepostal,Pays,Mail)
                    VALUES('Giraud','Pierre','Quai d\'Europe','Toulon',83000,'France','pierre.giraud@edhec.com')";
               
               $dbco->exec($sql);
                
                echo 'valeur !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }


?>
  

