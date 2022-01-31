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

<?php
    // $name = $_GET['name'];
    // $mail = $_GET['mail'];
    // $age = $_GET['age'];
    // if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && (is_numeric($age))) {
    //     $accesso = 'accesso riuscito';
    // } else {
    //     $accesso = 'accesso negato';
    // }
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


    $mynum = [];
    $i = 0;
    while ($i <= 15) { 
        $rand = rand(1,100);
        $mynum[] = $rand;
        echo $mynum[$i] ;
        $i++; 
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

