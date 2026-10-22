<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Generatore di Tabelline</title>
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
                        $numeroMassimo = intval($_GET['numero']);

                        echo('<div class="container-fluid mt-3">');
                        echo('<h2>Tabelline da 1 a '.$numeroMassimo.'</h2>');
                        
                        // Apertura della tabella Bootstrap
                        echo('<div class="table-responsive">');
                        echo('<table class="table table-striped table-bordered text-center align-middle">');
                        echo('<thead class="table-dark">');
                        echo('<tr>');
                        echo('<th>Numero</th>');
                        // Intestazioni colonne da x1 a x10
                        for($moltiplicatore = 1; $moltiplicatore <= 10; $moltiplicatore++){
                            echo('<th>x'.$moltiplicatore.'</th>');
                        }
                        echo('</tr>');
                        echo('</thead>');
                        echo('<tbody>');

                        // Ciclo per righe (da 1 fino al numero inserito)
                        for($i = 1; $i <= $numeroMassimo; $i++){
                            echo('<tr>');
                            echo('<td class="fw-bold table-primary">Tabellina del '.$i.'</td>');
                            
                            // Ciclo per colonne (i singoli prodotti da 1 a 10)
                            for($j = 1; $j <= 10; $j++){
                                $prodotto = $i * $j;
                                echo('<td>'.$prodotto.'</td>');
                            }
                            echo('</tr>');
                        }

                        echo('</tbody>');
                        echo('</table>');
                        echo('</div>');

                        echo('<a href="22_10_2026es5.php" class="btn btn-secondary mt-3">Torna al form...</a>');
                        echo('</div>');
                        break;
                    }
                }
            }
            else{
                echo('<div class="container-fluid">
                    <h1>Generatore di Tabelline</h1>
                    <form action="22_10_2026es5.php" method="get">
                        <div class="mb-3">
                            <label for="numero" class="form-label">Inserisci un valore massimo:</label>
                            <input class="form-control form-control-lg" type="number" min="1" name="numero" id="numero" placeholder="Es. 5" aria-label="default input example" required>
                        </div>
                        <input type="hidden" name="scelta" id="scelta" value="calcola">
                        <button class="btn btn-success" type="submit">Inoltra il Form</button>
                    </form>            
                </div>');
            }
        ?>
        <!-- sezione script richiesta dal framework Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
