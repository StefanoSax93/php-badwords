<?php
/*Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare.*/

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptate ratione, animi, ea, nemo officia magni neque
            a amet laboriosam doloribus dolorum ipsa fugiat tempora cupiditate cum praesentium sint vero?';

echo $paragrafo;
echo "<br>";
echo "lunghezza paragrafo: " . strlen($paragrafo);

$censura = $_GET['censura'];

if (stripos($paragrafo, $censura) !== false) {
    $paragrafo = str_ireplace($censura, "***", $paragrafo);
};

echo "<br>";
echo "<br>";
echo $paragrafo;
echo "<br>";
echo "lunghezza paragrafo: " . strlen($paragrafo);
?>
