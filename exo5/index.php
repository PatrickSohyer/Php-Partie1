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
        
<?php settype ($number, 'int'); $number= NULL; ?>
        <p>voici ma variable ( <?= $number; ?> )!</p>  <!-- < ? = prends le echo en compte -->
        <?php $number = 5; ?>
        <p>voici de nouveau ma variable  <?= $number; ?></p>
        
    </body>
    
</html>
