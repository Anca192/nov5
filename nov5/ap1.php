<?php

// Scrieti un program care afiseaza 'Buna' pe ecran
//
//1. echo "Buna";

//Declarati doua variabile si afisati suma lor

//$a = 25;
//$b = 22;
//echo $a+$b;

// Declarati un formular simplu care accepta un nume si il afiseaza pe ecran

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $animal = $_POST['animal'];
//    echo "Acesta este $animal meu";
//}


//<!---->
//<!--<form method="post">-->
//<!--    Nume: <input type="text" name="nume">-->
//<!--    <input type="submit">-->
//<!--</form>-->

//4. Creati un array cu 5 elemente si afisati-l folosind o bucla foreach
//5. Scrieti o functie care accepta doi parametri si returneaza produsul lor
//6. Afisati data si ora curenta intr-un format ales
//7. Creati un script care salveaza o variabila din sesiune
//8. Scieti un script care creaza un fisier, scrie ceva in el si apoi il citeste
//9. Definiti o clasa simpla si creati o instanta a acelei clase
//10. Creati un script care inverseaza un sir de caractere

// 4.
    //$array = [1,2,3,4,5];
    //foreach ($array as $element) {
    //    echo $element.' ';
    //}

// 5.
    //function produs($a,$b) {
    //    return $a*$b;
    //};
    //echo produs(6,3);

// 6.

    //echo date('Y-m-d H:i:s');

// 7.

//    session_start();
//    $_SESSION['variabila'] = 'valoare';
//    echo  $_SESSION['variabila'];

// 8.

//    file_put_contents('fisier.txt','Continutul fisierului');
//    $continut = file_get_contents('fisier.txt');
//    echo $continut;

// 9.

//    class ClasaSimpla {
//        public $atribut = "valoare";
//    }
//
//    $obiect = new ClasaSimpla();
//    echo $obiect->atribut;

// 10.

    $welcome = "Hello";
    echo strrev($welcome);