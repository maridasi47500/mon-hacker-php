<?php

namespace mywelcome;
class MysqlClass
{
            $servername = 'localhost';
            $username = 'root';
            $dbname = 'bddtest';
            $password = 'root';
            
            //On établit la connexion


  // Redéfinition de la méthode parente
public $name;
public $path;
  function __construct($path,$name){
try{
            $dbco = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
 $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE DATABASE $this->dbname";
                $dbco->exec($sql);
                
                echo 'Base de données créée bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
$dbco->close;

$this->name=$name;
$this->path=$path;
}
public function mytables(){
try{
                $dbco = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sql = "CREATE TABLE Users(
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
                
                $dbco->exec($sql);
                echo 'Table bien créée !';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
$dbco->close;
}

  public function get_path() {
    return $this->path;
  }
}
        ?>
