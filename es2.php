<!doctype html>
<html>
    <head>
        <title>Esempio input di valori da HTTP REQUEST</title>
    </head>
    <body>
        <?php
            /*  come faccio a passare dei valori ad una pagin a PHP?
                Utilizzo il passaggio per HTTP REQUIEST con la struttura chiave=valore

                esempio: http://.../es2.php?chiave1=12&chiave2=3

                la mia pagina riceve 2 chiavi (chiave 1 e chiave2) con valori 12 e 3

                come le recupero nella pagina php?
                utilizzo i vettori associativi globali che vengono creati durante un http request
                $GET[]$post[]$REQUEST[]
                $GET['chiave1'] e $GET['chiave2']
            */
            //verifico che esistano la chiave nel vettore GET altrimenti a e b li imposto con valori di default
            if(isset($_GET['chiave1']))
                $a=$_GET['chiave1'];
            else
                $a=0;
            if(isset($_GET['chiave2']))
                $b=$_GET['chiave2'];
            else
                $b= 0;
            echo("Chiave 1: ".$a."<br />");
            echo("Chiave 2: ".$b."<br />");
            //somma
            $c=$a+$b;
            echo("somma= ".$c);
        ?>
    </body>
</html>