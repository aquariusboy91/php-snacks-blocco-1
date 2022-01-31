<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che 
name sia più lungo di 3 caratteri, che mail contenga un punto e una 
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato” -->

<!-- ## Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
     DD-MM-YYYY es 01-01-2007 e come valore un array 
     di post associati a quella data. Stampare ogni data con i relativi post. -->

     <!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, 
contenente diverse frasi. Prendere il paragrafo e
 suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    // SNACK 1
    // $name = $_GET['name'];
    // $mail = $_GET['mail'];
    // $age = $_GET['age'];
    // if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && (is_numeric($age))) {
    //     $accesso = 'accesso riuscito';
    // } else {
    //     $accesso = 'accesso negato';
    // }

    // SNACK 2
    // $posts = [

    //     '10/01/2019' => [
    //         [
    //             'title' => 'Post 1',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 1'
    //         ],
    //         [
    //             'title' => 'Post 2',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 2'
    //         ],
    //     ],
    //     '10/02/2019' => [
    //         [
    //             'title' => 'Post 3',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 3'
    //         ]
    //     ],
    //     '15/05/2019' => [
    //         [
    //             'title' => 'Post 4',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 4'
    //         ],
    //         [
    //             'title' => 'Post 5',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 5'
    //         ],
    //         [
    //             'title' => 'Post 6',
    //             'author' => 'Michele Papagni',
    //             'text' => 'Testo post 6'
    //         ]
    //     ],
    // ];
    // print_r($posts);

        //SNACK 3 

    // $mynum = [];
    // $i = 0;
    // while ($i <= 15) { 
    //     $rand = rand(1,100);
        
    //     if (!in_array($rand, $mynum)) {
    //         $mynum[] = $rand;
    //         echo $mynum[$i] . '<br> ' ;
    //         $i++;
    //     } 
    // }
        // SNACK 4
    $paragrafo = "Molteplici furono i passi che portarono alla nascita di questa disciplina. Il primo, sia a livello di importanza sia di ordine cronologico, è l’avvento dei calcolatori e il continuo interesse rivolto a essi. Già nel 1623, grazie a Willhelm Sickhart, si arrivò a creare macchine in grado di effettuare calcoli matematici con numeri fino a sei cifre, anche se non in maniera autonoma. Nel 1642 Blaise Pascal costruì una macchina in grado di fare operazioni utilizzando il riporto automatico, mentre nel 1674 Gottfried Wilhelm von Leibniz creò una macchina in grado di effettuare la somma, la differenza e la moltiplicazione in maniera ricorsiva. Tra il 1834 e il 1837 Charles Babbage lavorò al modello di una macchina chiamata macchina analitica, le cui caratteristiche anticiparono in parte quelle dei moderni calcolatori. Nel ventesimo secolo l’attenzione sui computer ritornò ad accendersi: nel 1937, ad esempio, Claude Shannon, all’università di Yale, mostrò come l’algebra booleana e le operazioni binarie potessero rappresentare il cambiamento circuitale all’interno dei telefoni.";
    $pieces = explode(".", $paragrafo);
    for ($i = 0; $i < count($pieces); $i++) {
        echo $pieces[$i] . '<br> ' ;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    <!-- <h1><?php echo $accesso ?></h1> -->
</body>
</html>

