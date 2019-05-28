<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>

    <body>

        <?php $number = NULL; ?>
        <p>La variable number n'a pas de valeur ( <?php echo $number; ?> )!</p>
        <?php $number = 10; ?>
        <p>La variable number a une valeur de ( <?php echo $number; ?> )!</p>

        <?php settype($number, 'int');
        $number = NULL;
        ?>
        <p>voici ma variable ( <?= $number; ?> )!</p>  <!-- < ? = prends le echo en compte -->
<?php $number = 5; ?>
        <p>voici de nouveau ma variable  <?= $number; ?></p>

        <p><a href="http://phpexercice/partie1/exo1/">Partie 1 exerice 1</a></p>
        <p><a href="http://phpexercice/partie1/exo2/">Partie 1 exerice 2</a></p>
        <p><a href="http://phpexercice/partie1/exo3/">Partie 1 exerice 3</a></p>
        <p><a href="http://phpexercice/partie1/exo4/">Partie 1 exerice 4</a></p>
        <p><a href="http://phpexercice/partie1/exo5/">Partie 1 exerice 5</a></p>
        <p><a href="http://phpexercice/partie1/exo6/">Partie 1 exerice 6</a></p>
        <p><a href="http://phpexercice/partie1/exo7/">Partie 1 exerice 7</a></p>
        <p><a href="http://phpexercice/partie1/exo8/">Partie 1 exerice 8</a></p>

    </body>

</html>
