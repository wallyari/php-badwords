<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <?php
    // parola da censurare
    $badword = $_POST['parolaInserita'];
    // paragrafo
    $testo = 'I, I wish you could swim
    Like the dolphins, like dolphins can swim
    Though nothing, nothing will keep us together
    We can beat them, for ever and ever
    Oh we can be heroes, just for one day.
    I, I will be king
    And you, you will be queen
    Though nothing will drive them away
    We can be heroes, just for one day
    We can be us, just for one day';
    
    //sostituire parola con ***
    $badwordText =str_replace($badword, "***", $testo);
    
    //trim & strtolower
    ?>
<section>


<!-- paragrafo -->
<h1><?php echo $testo;?></h1>

<!-- paragrafo con badwords -->
<h2><?php echo $badwordText;?></h2>

<!-- lunghezza paragrafo -->
<p>Il paragrafo contiene <?php echo strlen($testo) ?> caratteri</p>


</section>

    
</body>
</html>