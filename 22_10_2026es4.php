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
                        $raggio=$_GET["raggio"];
                        //calcoli
                        $circonferenza=2*M_PI*$raggio;
                        $area=M_PI*pow($raggio, 2);

                        echo('<div class="container-fluid mt-3">');
                        echo('<h2>RIsultati raggio:' .$raggio. '</h2>');
                        echo('La circonferenza è: '.number_format($circonferenza, 2).'<br />');
                        echo('L\'area del cerchio è: '.number_format($area, 2).'<br /><br />');
                        echo('<a href="22_10_2026es4.php" class="btn btn-secondary">Torna al form...</a>');
                        echo('</div>');
                        break;
                    }
                }
            }
            else{
                echo('<div class="container-fluid">
                    <h1>Form Inserimento raggio</h1>
                    <form action="22_10_2026es4.php" method="get">
                        <div class="mb-3">
                            <label for="inputA" class="form-label">Misura raggio</label>
                            <input class="form-control form-control-lg" type="text" name="raggio" id="raggio" placeholder="Valore di A" aria-label="default input example">
                        </div>
                        <input type="hidden" name="scelta" id="scelta" value="calcola">
                        <button class="btn btn-success" type="submit">Inoltra il Form</button>
                    </form>            
                </div>');
            }
        ?>
        <!-- sezione script richiesta dal framework Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>