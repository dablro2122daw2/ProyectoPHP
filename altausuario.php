<?php
  session_start();  
  echo "<p style='text-align:right'>"."Nom Usuari:  ".$_SESSION['user']."</p>";
  echo "<p style='text-align:right'>"."Tipus Usuari:  ".$_SESSION['tipus']."</p>";
  echo "<p style='text-align:right'>"."Sessió: ".session_id()."</p>";

  echo "<form style='text-align:right' action='retrocedirpagina.php' method='GET'>";
  echo "<input type='submit' name='RetrocedirPagina' value='Tornar a la Página Anterior'>";
  echo "</form>";

  echo "<form style='text-align:right' action='logout.php' method='GET'>";
  echo "<input type='submit' name='TancarSessio' value='Tancar Sessió'>";
  echo "</form>";
  header( "refresh:10;url=./retrocedirpagina.php" );
?>


 <h1>El nou usuari ha enregistrat correctament al sistema </h1>
 <p>Esperi uns segons a que sigui retornat al menú principal</p>


<?php


class Usuari{
  private $user;
  private $nomcomplet;
  private $Adreça;
  private $correu;
  private $tlf;
  private $dni;
  private $pass;
  private $prestec;
  private $dataPrestec;
  private $ISBN;

  public function __construct($user,$pass,$nomcomplet,$Adreça,$correu,$tlf,$dni,$prestec,$dataPrestec,$ISBN){        
          $this->user=$user;
          $this->pass=$pass;
          $this->nomcomplet=$nomcomplet;
          $this->Adreça=$Adreça;
          $this->correu=$correu;
          $this->tlf=$tlf;
          $this->dni=$dni;
          $this->prestec=$prestec;
          $this->dataPrestec=$dataPrestec;
          $this->ISBN=$ISBN;
      }

      public function getNom(){
        return $this->user;
      }
      public function getPass(){
        return $this->pass;
      }
      public function getNomC(){
        return $this->nomcomplet;
      }
      public function getAdreça(){
        return $this->Adreça;
      }
      public function getCorreu(){
        return $this->correu;
      }
      public function getTlf(){
        return $this->tlf;
      }
      public function getDNI(){
        return $this->dni;
      }
      public function getprestec(){
        return $this->prestec;
      }
      public function getdataPrestec(){
        return $this->dataPrestec;
      }
      public function getISBN(){
        return $this->ISBN;
      }
      public function setdataPrestec(){
        return $this->dataPrestec=0;
      }
      
      public function setISBN(){
        return $this->ISBN=0;
      }
}

 // recupera los datos del envío POST
 
 $user = $_POST["user"];

 $pass = $_POST["pass"];

 $nomcomplet = $_POST["nomcomplet"];

 $Adreça = $_POST["Adreça"];

 $correu = $_POST["correu"];

 $tlf = $_POST["tlf"];

 $dni = $_POST["dni"];

 $prestec = $_POST["prestec"];

 $dataPrestec = $_POST["dataPrestec"];

 $ISBN = $_POST["ISBN"];

   
 $usuaris = new Usuari($user,$pass,$nomcomplet,$Adreça,$correu,$tlf,$dni,$prestec,$dataPrestec,$ISBN);
 // valida los datos enviados

 // verificamos datos

  if(empty ($usuaris->getNom())){
  die ('ERROR: Si us plau proporcioni el seu user.');
} 

  if(empty ($usuaris->getPass())){
    die ('ERROR: Si us plau proporcioni la seva password.');
    }
      if(empty ($usuaris->getNomC())){
      die ('ERROR: Si us plau proporcioni el seu usuari.');
    }
        if(empty ($usuaris->getNomC())){
            die ('ERROR: Si us plau proporcioni el seu nom complet.');
            }

            if(empty ($usuaris->getAdreça())){
                die ('ERROR: Si us plau proporcioni la seva Adreça.');
                }

                if(empty ($usuaris->getCorreu())){
                    die ('ERROR: Si us plau proporcioni el seu correu.');
                    }

                    if(empty ($usuaris->getTlf())){
                        die ('ERROR: Si us plau proporcioni el seu tlf.');
                        }

                        if(empty ($usuaris->getDNI())){
                            die ('ERROR: Si us plau proporcioni el seu DNI.');
                            }
                            if($prestec=="Si"){
                              $usuaris->getdataPrestec();
                              $usuaris->getISBN(); }
                            else{
                              $usuaris->setdataPrestec();
                              $usuaris->setISBN();
                            }
	
                    


extract($_REQUEST);
$file=fopen("usuarios.txt","a");
fwrite($file, "\n");  

fwrite($file, $usuaris->getNom(). "|");

fwrite($file, $usuaris->getPass(). "|");

fwrite($file, $usuaris->getNomC(). "|");

fwrite($file, $usuaris->getAdreça(). "|");

fwrite($file, $usuaris->getCorreu(). "|");

fwrite($file, $usuaris->getTlf(). "|");

fwrite($file, $usuaris->getDNI(). "|");

fwrite($file, $usuaris->getprestec(). "|");

fwrite($file, $usuaris->getdataPrestec(). "|");

fwrite($file, $usuaris->getISBN(). "|");


fwrite($file, "---------------------------------------\n");    
                      
?>
 