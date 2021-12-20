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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuari</title>
</head>

<body>
    <main>
    <?php
    $USUARISTEMP = array();
        if (($CLIENTS = fopen("bibliotecarios.txt", "r")) !== FALSE) {
            while (($USUARIS = fgetcsv($CLIENTS, 1000, "|")) !== FALSE) {
                    if($USUARIS[0] == $_POST['user']){
                        if($_POST['user']){
                            $USUARIS[0] = $_POST['user'];
                        }
                        if($_POST['nomcomplet']){
                            $USUARIS[2] = $_POST['nomcomplet'];
                        }
                        if($_POST['pass']){
                            $USUARIS[1] = $_POST['pass'];
                        }
                        if($_POST['Adreça']){
                            $USUARIS[3] = $_POST['Adreça'];
                        }
                        if($_POST['correu']){
                            $USUARIS[4] = $_POST['correu'];
                        }
                        if($_POST['tlf']){
                            $USUARIS[5] = $_POST['tlf'];
                        }
                        if($_POST['dni']){
                            $USUARIS[6] = $_POST['dni'];
                        }
                        if($_POST['nsocial']){
                            $USUARIS[7] = $_POST['nsocial'];
                        }
                        if($_POST['datainici']){
                            $USUARIS[8] = $_POST['datainici'];
                        }
                        if($_POST['salari']){
                            $USUARIS[9] = $_POST['salari'];
                        }
                        if($_POST['bibliocap']){
                            $USUARIS[10] = $_POST['bibliocap'];
                        }

                        $USUARI = $USUARIS[0];
                        $NOMCOMPLET = $USUARIS[2];
                        $ADRECA = $USUARIS[3];
                        $CORREU = $USUARIS[4];
                        $TELEFON = $USUARIS[5];
                        $DNI = $USUARIS[6];
                        $NSOCIAL = $USUARIS[7];
                        $DATAINICI = $USUARIS[8];
                        $SALARI = $USUARIS[9];
                        $BIBLIOCAP = $USUARIS[10];
                    }
                    $USUARISTEMP[] = $USUARIS;
                }
            }fclose($CLIENTS);
            $FP = fopen("bibliotecarios.txt", 'w');
            foreach($USUARISTEMP as $USER){
                fputcsv($FP, $USER, "|");
            }
            fclose($FP);
        ?>
        <div class="options-flex">
            <div class="option-list">
            <h3>El bibliotecari <?php echo $_POST['user']?> ha estat modificat correctament.</h3>
            <ul>
                <li><h3><strong>Resum:</strong></h3></li>
                <li><strong>Nom d'usuari: </strong><?php echo "$USUARI"?></li>
                <li><strong>Nom Complet: </strong><?php echo "$NOMCOMPLET"?></li>
                <li><strong>Direcció: </strong><?php echo $ADRECA ?></li>
                <li><strong>Direcció de Correu Electrònic: </strong><?php echo $CORREU ?></li>
                <li><strong>Nª de telèfon: </strong><?php echo $TELEFON ?></li>
                <li><strong>DNI: </strong><?php echo $DNI ?></li>
                <li><strong>Número de la seguretat social: </strong><?php echo $NSOCIAL ?></li>
                <li><strong>Data inici de contracte: </strong><?php echo $DATAINICI ?></li>
                <li><strong>Salari: </strong><?php echo $SALARI ?></li>
                <li><strong>Cap bibliotecari: </strong><?php echo $BIBLIOCAP ?></li>

        
</main>