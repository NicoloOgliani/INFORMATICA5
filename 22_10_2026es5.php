<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Prova di form per raccolta dati</title>
        <meta charset="utf-8">
        <!-- parte richiesta dal framework Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if(isset($_GET['scelta'])){
                switch($_GET['scelta']){
                    case "calcola":{
                        $tabellina=$_GET["valore"];
                        
                        echo('<table style="border: solid 2px rgb(200,0,0);">');
                            for($r=1; $r<=$tabellina; $r++){
                                echo('<tr>');
                                for($c=1; $c<=10; $c++){
                                    $prodotto=$r*$c;
                                    //echo($prodotto. ' ');
                                    echo('<td style="border: solid 2px rgb(200,0,0);">' .$prodotto.'</td>');
                                }
                                //echo('<br />');
                                echo('</tr>');
                            }
                        echo('</table>');
                      
                        echo('<a href="22_10_2026es4.php" class="btn btn-secondary">Torna al form...</a>');
                        echo('</div>');
                        break;
                    }
                }
            }
            else{
                echo('<div class="container-fluid">
                    <h1>Calcola tabelline</h1>
                    <form action="22_10_2026es5.php" method="get">
                        <div class="mb-3">
                            <label for="inputA" class="form-label">Inserisci il valore</label>
                            <input class="form-control form-control-lg" type="text" name="valore" id="valore" placeholder="Valore" aria-label="default input example">
                        </div>
                        <input type="hidden" name="scelta" id="scelta" value="calcola">
                        <button class="btn btn-primary" type="submit">Visualizza le tabelline</button>
                    </form>            
                </div>');
            }
        ?>
        <!-- sezione script richiesta dal framework Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>