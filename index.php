<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&amp;firstname=Jean">000</a>
        <p>
    <?php
    if (isset($_GET['firstname']) && isset($_GET['lastname'])){
      echo $_GET['firstname'] ." ". $_GET['lastname'];
    }
    ?>
        </p>
    </body>
</html>
