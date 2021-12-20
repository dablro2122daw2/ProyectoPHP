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
    $LLIBRESTEMP = array();
        if (($FITXER = fopen("libros.txt", "r")) !== FALSE) {
            while (($LLIBRES = fgetcsv($FITXER, 1000, "|")) !== FALSE) {
                    if($LLIBRES[0] == $_POST['titolLlibre']){
                        if($_POST['titolLlibre']){
                            $LLIBRES[0] = $_POST['titolLlibre'];
                        }
                        if($_POST['prestec']){
                            $LLIBRES[2] = $_POST['prestec'];
                        }
                        if($_POST['autorLlibre']){
                            $LLIBRES[1] = $_POST['autorLlibre'];
                        }
                        if($_POST['dataPrestec']){
                            $LLIBRES[3] = $_POST['dataPrestec'];
                        }
                        if($_POST['user']){
                            $LLIBRES[4] = $_POST['user'];
                        }
                        if($_POST['ISBN']){
                            $LLIBRES[5] = $_POST['ISBN'];
                        }

                        $TITOLLLIBRE = $LLIBRES[0];
                        $AUTORLLIBRE = $LLIBRES[1];
                        $PRESTEC = $LLIBRES[2];
                        $DATAPRESTEC = $LLIBRES[3];
                        $USER = $LLIBRES[4];
                        $ISBN = $LLIBRES[5];
                    }
                    $LLIBRESTEMP[] = $LLIBRES;
                }
            }fclose($FITXER);
            $FP = fopen("libros.txt", 'w');
            foreach($LLIBRESTEMP as $LLIBRE){
                fputcsv($FP, $LLIBRE, "|");
            }
            fclose($FP);
        ?>
        <div class="options-flex">
            <div class="option-list">
            <h3>El llibre <?php echo $_POST['titolLlibre']?> ha estat modificat correctament.</h3>
            <ul>
                <li><h3><strong>Resum:</strong></h3></li>
                <li><strong>Títol del Llibre: </strong><?php echo "$TITOLLLIBRE"?></li>
                <li><strong>Nom de l'Autor del Llibre: </strong><?php echo "$AUTORLLIBRE"?></li>
                <li><strong>Prestec: </strong><?php echo $PRESTEC ?></li>
                <li><strong>Data del Prestec: </strong><?php echo $DATAPRESTEC ?></li>
                <li><strong>Codi d'Usuari: </strong><?php echo $USER ?></li>
                <li><strong>ISBN: </strong><?php echo $ISBN ?></li>

      
</main>