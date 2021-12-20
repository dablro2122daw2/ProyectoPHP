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


 <h1>El nou bibliotecari ha enregistrat correctament al sistema </h1>
 <p>Esperi uns segons a que sigui retornat al menú principal</p>


<?php


class Bibliotecari{
  private $user;
  private $nomcomplet;
  private $Adreça;
  private $correu;
  private $tlf;
  private $dni;
  private $pass;
  private $nsocial;
  private $datainici;
  private $salari;
  private $bibliocap;



  public function __construct($user,$nomcomplet,$Adreça,$correu,$tlf,$dni,$pass,$nsocial,$datainici,$salari,$bibliocap){  
          $this->user=$user; 
          $this->pass=$pass;     
          $this->nomcomplet=$nomcomplet;
          $this->Adreça=$Adreça;
          $this->correu=$correu;
          $this->tlf=$tlf;
          $this->dni=$dni;
          $this->nsocial=$nsocial;
          $this->datainici=$datainici;
          $this->salari=$salari;
          $this->bibliocap=$bibliocap;
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
      public function getNSocial(){
        return $this->nsocial;
      }
      public function getdataInici(){
        return $this->datainici;
      }
      public function getSalari(){
        return $this->salari;
      }
      public function getBibliocap(){
        return $this->bibliocap;
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

 $nsocial = $_POST["nsocial"];

 $datainici = $_POST["datainici"];

 $salari = $_POST["salari"];

 $bibliocap = $_POST["bibliocap"];

   
 $Bibliotecari = new Bibliotecari($user,$nomcomplet,$Adreça,$correu,$tlf,$dni,$pass,$nsocial,$datainici,$salari,$bibliocap);
 // valida los datos enviados

 // verificamos datos
  
 if(empty ($Bibliotecari->getNom())){
  die ('ERROR: Si us plau proporcioni el seu user.');
} 
  if(empty ($Bibliotecari->getPass())){
    die ('ERROR: Si us plau proporcioni la seva password.');
    }
      if(empty ($Bibliotecari->getNomC())){
      die ('ERROR: Si us plau proporcioni el seu user.');
    }
        if(empty ($Bibliotecari->getNomC())){
            die ('ERROR: Si us plau proporcioni el seu nom complet.');
            }

            if(empty ($Bibliotecari->getAdreça())){
                die ('ERROR: Si us plau proporcioni la seva Adreça.');
                }

                if(empty ($Bibliotecari->getCorreu())){
                    die ('ERROR: Si us plau proporcioni el seu correu.');
                    }

                    if(empty ($Bibliotecari->getTlf())){
                        die ('ERROR: Si us plau proporcioni el seu telefon.');
                        }

                        if(empty ($Bibliotecari->getDNI())){
                            die ('ERROR: Si us plau proporcioni el seu DNI.');
                            }
                                if(empty ($Bibliotecari->getNSocial())){
                                    die ('ERROR: Si us plau proporcioni el seu número de la seguretat social.');
                                    }

                                    if(empty ($Bibliotecari->getdataInici())){
                                        die ('ERROR: Si us plau proporcioni la seva data inici de contracte.');
                                        }

                                        if(empty ($Bibliotecari->getSalari())){
                                            die ('ERROR: Si us plau proporcioni el seu salari.');
                                            }

                                            if(empty ($Bibliotecari->getBibliocap())){
                                                die ('ERROR: Si us plau proporcioni si es cap o no.');
                                                }
             


extract($_REQUEST);
$file=fopen("bibliotecarios.txt","a");
fwrite($file, "\n");  

fwrite($file, $Bibliotecari->getNom(). "|");

fwrite($file, $Bibliotecari->getPass(). "|");

fwrite($file, $Bibliotecari->getNomC(). "|");

fwrite($file, $Bibliotecari->getAdreça(). "|");

fwrite($file, $Bibliotecari->getCorreu(). "|");

fwrite($file, $Bibliotecari->getTlf(). "|");

fwrite($file, $Bibliotecari->getDNI(). "|");

fwrite($file, $Bibliotecari->getNSocial(). "|");

fwrite($file, $Bibliotecari->getdataInici(). "|");

fwrite($file, $Bibliotecari->getSalari(). "|");

fwrite($file, $Bibliotecari->getBibliocap(). "|");


fwrite($file, "---------------------------------------\n");    
                      
?>