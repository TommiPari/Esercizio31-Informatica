<?php
    session_start();
    if (isset($_SESSION['tentativi'])) {
        $_SESSION['tentativi']++;
    } else {
        $_SESSION['tentativi'] = 1;
    }
    if (!isset($_SESSION['vittoria'])) {
        $_SESSION['vittoria'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = rand(1,20);
        if ($num == $_GET["numUtente"]) {
            $_SESSION["vittoria"]++;
        }
    ?>
    <div class="titolo">
        <h1>Risultato</h1>
    </div> <br>
    <div class="divNumero">
        <h2>Il tuo numero: <?php echo $_GET["numUtente"];?></h2>
        <h2>Il numero generato: <?php echo $num;?></h2>
        <h2>Tentativi: <?php echo $_SESSION["tentativi"];?></h2>
        <h2>Vittorie: <?php echo $_SESSION["vittoria"];?></h2>
        <a href="./index.html">Torna indietro</a>
    </div>
    <br>
</body>
</html>