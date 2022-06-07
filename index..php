<?php
/*
    Esercizio di oggi: php Badwords
    nome repo: php-badwords

    Descrizione:
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.

    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sequi quo nihil corrupti fugiat, nostrum, temporibus voluptate nobis consequatur, a exercitationem laudantium voluptatem maxime incidunt! Laboriosam quam nemo officia accusamus!";

$stringLength = strlen( $string);

$badword = $_GET['badword'];

$stringCensored = str_replace($badword, '***', $string);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta htth2-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BAD_WORD</title>
</head>
    <style>
        span{
            text-decoration: underline;
        }
    </style>
<body>
    <h2><?php echo $string ?></h2>
    <h2>
        La stringa ha <span><?php echo $stringLength ?></span> caratteri
    </h2>
    <h2>
        La parola da censurare è <span><?php echo $badword ?></span>
    </h2>
    <h2>
        Il testo censurato è:<br>
        <?php echo str_replace($badword, '***', $string) ?>
    </h2>
    <h2>
        Ed è lungo <span><?php echo strlen($stringCensored) ?></span> caratteri
    </h2>
    
</body>
</html>