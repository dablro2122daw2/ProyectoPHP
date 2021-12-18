<?php
  session_start();  

?>


 <h1>El nou llibre ha enregistrat correctament al sistema </h1>



<?php
class Llibre{
    private $titolLlibre;
    private $autorLlibre;
    private $user;
    private $ISBN;
    private $prestec;
    private $dataPrestec;

  public function __construct($titolLlibre,$autorLlibre,$ISBN,$prestec,$dataPrestec,$user){        
          $this->titolLlibre=$titolLlibre;
          $this->autorLlibre=$autorLlibre;
          $this->ISBN=$ISBN;
          $this->prestec=$prestec;
          $this->dataPrestec=$dataPrestec;
          $this->user=$user;
      }

      public function gettitolLlibre(){
        return $this->titolLlibre;
      }
      public function getautorLlibre(){
        return $this->autorLlibre;
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
      public function getuser(){
        return $this->user;
      }
      public function setdataPrestec(){
        return $this->dataPrestec=0;
      }
      public function setuser(){
        return $this->user=0;
      }

}

 // recupera los datos del envío POST
 
 $titolLlibre = $_POST["titolLlibre"];

 $autorLlibre = $_POST["autorLlibre"];

 $prestec = $_POST["prestec"];

 $dataPrestec = $_POST["dataPrestec"];

 $ISBN = $_POST["ISBN"];

 $user = $_POST["user"];


   
 $llibre = new Llibre($titolLlibre,$autorLlibre,$ISBN,$prestec,$dataPrestec,$user);
 // valida los datos enviados

 // verificamos datos

  if(empty ($llibre->gettitolLlibre())){
  die ('ERROR: Si us plau proporcioni el seu user.');
} 

  if(empty ($llibre->getautorLlibre())){
    die ('ERROR: Si us plau proporcioni la seva password.');
    }

        if($prestec=="Si"){
            $llibre->getdataPrestec();
            $llibre->getdataPrestec(); }
        else{
            $llibre->setdataPrestec();
            $llibre->setuser();
        }

                      if(empty ($llibre->getISBN())){
                            die ('ERROR: Si us plau proporcioni el ISBN del llibre.');
                            }
	                   

extract($_REQUEST);
$file=fopen("libros.txt","a");
fwrite($file, "\n");  

fwrite($file, $llibre->gettitolLlibre(). "|");

fwrite($file, $llibre->getautorLlibre(). "|");

fwrite($file, $llibre->getprestec(). "|");

fwrite($file, $llibre->getdataPrestec(). "|");

fwrite($file, $llibre->getuser(). "|");

fwrite($file, $llibre->getISBN(). "|");


fwrite($file, "---------------------------------------\n");    
                      
?>
