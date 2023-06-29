<?php

//15 functii specifice stringurilor

// $string = "Numele meu este dragoste";
// $string2 = "   Numele meu este dragoste    ";
// $string3 = "   Numele meu este dragoste";
// $string4 = "Numele meu este dragoste    ";
// $string5 = "numele meu este dragoste    ";
// //1
// $lungimeString = strlen($string);
// echo $lungimeString."<br>";
// //2
// $nrCuvinte = str_word_count($string);
// echo $nrCuvinte."<br>";
// //3
// $modificare = str_replace("dragoste", "iubire", $string);
// echo $modificare."<br>";
// //4
// $extragere = substr($string, 7, 3);
// echo $extragere."<br>";
// //5
// $elimSpatii = trim($string2);
// echo $elimSpatii."<br>";
// //6
// $elimSpatiiStanga=ltrim($string);
// echo $elimSpatiiStanga."<br>";
// //7
// $elimSpatiiDreapta = rtrim($string4);
// echo $elimSpatiiDreapta."<br>";
// //8
// $transformArr = explode(" ", $string);
// print_r($transformArr)."<br>";
// //9
// $arrIntoString = implode(" ", $transformArr);
// echo $arrIntoString."<br>";
// //10
// $index = strpos($string, 'N');
// echo $index."<br>";
// //11
// $big = strtoupper($string);
// echo $big."<br>";
// //12
// $small=strtolower($string);
// echo $small."<br>";
// //13
// $rev=strrev($string);
// echo $rev."<br>";

// //functii string de recapitulat
// //14
// $primaLitera=ucfirst($string5);
// echo $primaLitera."<br>";
// //15
// $majusculaCuvinte = ucwords($string);
// echo $majusculaCuvinte."<br>"."<br>"."<br>";

// //5. 15 functii pentru array

// $arr_string = ['gand', 'univers', 'blandete', 'gest', 'fenomen', 'suav'];
// $arr_indexat = [4, 10, 56, 23, 32, 2, 6, 1, 1, 1, 8];
// $arr_asociativ = ["Chuck Palahniuk" => "Supravietuitorul", "Jose Saramago" => "Eseu despre luciditate", "Jose Saramago" => "Evanghelia dupa Hristos"];

// //1
// sort($arr_string);
// print_r($arr_string);

// sort($arr_indexat);
// print_r($arr_indexat);

// //sort() ordoneaza crescator: fie numerele, fie alfabetic stringurile, dar produce modificarile in cadrul aceluiasi sir, fara a produce un nou sir atribuibil unei variabile;

// //2

// rsort($arr_indexat);
// print_r($arr_indexat);
// //ordeoneaza descrescator sirurile

// //3
// ksort($arr_asociativ);
// print_r($arr_asociativ);
// //ordoneaza crescator sirurile asociative dupa cheie

// //4

// asort($arr_asociativ);
// print_r($arr_asociativ);
// //ordoneaza crescator sirurile asociative dupa valoare

// //5
// $numar = count($arr_indexat);
// //sau sizeof($arr_indexat);
// echo $numar;
// //numara elementele din array

// //6
// $merged = array_merge($arr_string, $arr_indexat);
// print_r($merged);

// //7
// $search_result = array_search('suav', $arr_string);
// echo $search_result;
// //se returneaza indexul din cadrul arrayului modificat /ordonat/sortat

// //8
// $find = in_array('1000', $arr_indexat);
// var_dump($find);
// //cauta o anume valoare in sir

// //9
// $sum=array_sum($arr_indexat);
// echo $sum;
// //calculeaza suma elementelor

// //10
// //implode()/explode() - identic cu cel de la string

// //11
// $extrag = array_slice($arr_string, 2, 3);
// print_r($extrag);
// //a extras din sirul ordonat elementele de sir incepand cu indexul 2, 3 elemente ca numar. le-a returnat in alt sir cu index de la zero

// //12
// //DE RECAPITULAT
// array_splice($arr_indexat, 1, 2);
// print_r($arr_indexat);
// //elimina sau inlocuieste elementele din sir si returneaza elementele eliminate

// //13

// $chei = array_keys($arr_asociativ);
// print_r($chei);
// //returneaza cheile din sir in alt sir

// //14
// $values = array_values($arr_asociativ);
// print_r($values);
// //returneaza valorile sirului in alt sir

// //15
// $rev = array_reverse($arr_indexat);
// print_r($rev);
// //inverseaza ordinea elementelor din sir



// // 10 exercitii ( for, while, do while , foreach ) 
// // 1.	Utilizând bucla for, afișează numerele de la 1 la 10.

// for($i=1;$i<=10;$i++) {
//   echo "$i"."<br>";
// }

// // 2.	Utilizând bucla while, afișează suma numerelor de la 1 la 100.

//  $i=1;
//  $sum=0;

// while($i<=100) {
// $i++;
// $sum+=$i;
// }

// echo $sum;

// // 3.	Utilizând bucla do while, afișează toate literele majuscule ale alfabetului.
// //!!! operatorii de comparatie se pot aplica si literelor



// // 4.	Utilizând bucla foreach, afișează elementele unui array numeric.

// $cifre =[4,5,9,8,2];

// foreach($cifre as $item) {
//   echo $item."<br>";
// }


// // 5.	Utilizând bucla for, calculează suma primelor 50 de numere pare.

// $sum=0;
// $z=1;
// for($i=1;$i<=100; $i++) {
//   if($i%2==0) {
//     $z=$i;
//     $sum+=$z;
//   }
  
// }
// echo $sum."<br>";


// // 6.	Utilizând bucla while, afișează inversul unui număr dat (de exemplu, 12345 devine 54321).

// //numarul poate fi definit ca string, ca sa putem manipula elementele sale. ultimul element trebuie sa devina primul si tot asa. altfel numarul impartit la 10 ar trebui sa returneze ultima cifra de la sfarsit. aceasta trebuie sa fie concatenata prima samd intr-un strig gol, pana cand restul devine zero, dar aplicam int pentru rotunjire

// $nr_inversat="";
// $nr=264859;

// while($nr%10>0) {
//   $nr_inversat.= $nr%10;
//   $nr=floor($nr/10);
// }

// echo $nr_inversat;

// 7.	Utilizând bucla do while, citiți numere de la utilizator până când se introduce 0 și afișați suma lor.
//5268205625

// $a = "56821058";
// $sum=0;
// $i=0;

// do{
// $i++;
// $sum+=$a[$i];
// if($a[$i]==0){
//   break;
// }
// }
// while($i<strlen($a));

// echo "Suma cifrelor introduse pana la cifra zero este: ". $sum;



// 8.	Utilizând bucla foreach, afișează toți studenții dintr-un array asociativ și media notelor lor.

// $arr = [
//   'Petru'=> "Media notelor: 9,64", 'Ionela'=> "Media notelor: 9,88", 'Mircea'=> "Media notelor: 8,99", 'Maria'=> "Media notelor: 10,00"
// ];

// foreach($arr as $k=>$v) {
//   echo "$k are $v."."<br>";
// }


// 9.	Utilizând bucla for, calculează factorialul unui număr dat.


//5 factorialul ar fi 5*4*3*1

// $nr=5;
// $factorial=1;

// for($x=$nr, $i=1; $i<=5; $i++, $x--) {
// $factorial*=$x;
// }

// echo $factorial;

// 10.	Utilizând bucla while, afișează toate numerele prime mai mici decât 100.
//daca se divid la i fara rest nu sunt prime pt ca au divizori

//???

// 7. 4 exercitii pentru ( if else, else, if, switch )

// 1.	Exercițiul if-else: Verifică dacă un număr este pozitiv sau negativ și afișează un mesaj corespunzător.

// $nr = -32;

// if($nr>0) {
//   echo "Numarul este pozitiv";
// } 
// else if($nr<0){
//   echo "Numarul este negativ";
// }


// 2.	Exercițiul if-elseif-else: Verifică vârsta utilizatorului și afișează un mesaj corespunzător în funcție de aceasta:
// •	Dacă vârsta este sub 18, afișează "Ești minor."
// •	Dacă vârsta este între 18 și 65, afișează "Ești adult."
// •	Dacă vârsta depășește 65, afișează "Ești senior."

// $varsta1=-85;
// $varsta = abs($varsta1);

// if($varsta<18) {
//   echo "Esti minor";
// }
// elseif($varsta>=18 && $varsta<=65) {
//   echo "Esti adult";
// }
// else{
//   echo "Esti senior";
// }


// 3.	Exercițiul switch: Verifică ziua săptămânii și afișează un mesaj corespunzător în funcție de aceasta:
// •	Dacă ziua este "Luni" sau "Marți", afișează "Început de săptămână."
// •	Dacă ziua este "Miercuri" sau "Joi", afișează "Mijloc de săptămână."
// •	Dacă ziua este "Vineri", afișează "Aproape weekend."
// •	Dacă ziua este "Sâmbătă" sau "Duminică", afișează "Weekend!"

// $zi="Duminică";

// switch($zi) {
//   case "Luni":
//   case "Marti":
//     echo "Inceput de saptamana";
//     break;
//   case "Miercuri":
//   case "Joi":
//     echo "Mijloc de saptamana";
//     break;
//   case "Vineri":
//     echo "Aproape weekend";
//     break;
//   case "Sambata":
//   case "Duminica":
//     echo "Weekend!";
//     break;
//   default:
//     echo "Ati introdus altceva decat zilele saptamanii sau ati folosit diacritice. Incercati sa nu folositi diacritice";
//   break;
// }



// 4.	Exercițiul if-else înlănțuit: Verifică dacă un an este bisect și afișează un mesaj corespunzător. Un an bisect este divizibil cu 4, dar nu este divizibil cu 100, cu excepția cazului în care este divizibil cu 400.

// $an = 2400;

// if($an%4==0 && !($an%100==0)) {
//   if($an%400==0) {
//     echo "Anul nu este bisect(exceptie)";
//   } else {
//    echo "An bisect.";
//   }
// }
// else {
//   echo "Anul nu este bisect.";
// }



//8. Functii anonime, exercitiu
//functia anonima nu are nume, poate fi atribuita unei variabile si folosita ulterior de ex in callback functions. este flexibila

// TODO: Definiți o funcție anonimă care să primească un număr și să returneze pătratul acestuia.
// TODO: Apelați funcția anonimă cu un număr și stocați rezultatul într-o variabilă.
// TODO: Afișați rezultatul stocat în variabilă.

// $anonim = function($a) { 
//   $result= pow($a, 2);
//   echo $result;
//  };
 
//  $anonim(5);
//  $anonim(10);
//  $anonim(15);
//  $anonim(25);

//9. Functia care nu stie cate numere o sa fie de afisat (Splat ) => exercitiu 

// function mister(...$numere) {
//   foreach($numere as $numar)
// {
//   echo $numar."<br>";
// }
// }

// $rezultat = mister(4,4, 4,5,9);
// echo $rezultat;

//10.	Diferenta dintre $_SERVER, $_POST, $_GET

/*
$_SERVER - se prezinta ca un array asociativ de tip cheie valoare.  cu ajutorul acestei variabile superglobale obtinem informatii despre server si mediul de executie. adica putem afla adresa URL, ip-ul clientului, metoda folosita in HTTP, informatii despre server. putem extrage informatii despre cererea HTTP a clientului sau despre server. spre exemplu $_SERVER['REQUEST_METHOD'] returneaza metoda http folosita: $_GET sau $_POST;
 
$_POST - este o variabila superglobala. este un array asociativ cheie valoare in care cheia reprezinta numele inputului si valoarea este cea introdusa in formular de catre utilizator. se utilizeaza atunci cand trebuie sa dam submit, se foloseste pentru informatii confidentiale, intrucat transferul de date de se face in corpul cererii http. se foloseste pentru cantitati mari de date introduse.ex: cu $_POST['username'] putem citi valoarea introdusa in formular din inputul cu numele username 

$_GET - este o variabila superglobala. este un array asociativ cheie valoare in care aceste doua elemente sunt reprezentate in URL sub forma de parametri inserati www.website.com?cheie1=valoare1&cheie2=valoare2. se utilizeaza pentru informatii neconfidentiale intrucat cererea http se transmite prin antetul cererii. in exemplul dat putem citi valoarea 1 din URL cu $_GET['cheie1']. variabila poate fi asignata unei variabile si utilizata ulterior.


*/

//11.	Afisarea array-ului in toate formele posibile

$arr = [8,9,5,5,4,7,6,1];

//1. var_dump

//var_dump($arr);
//2. print_r

//print_r($arr);

//3.foreach (I)

// foreach($arr as $item) {
//   echo $item."<br>";
// }

//+inca o versiune pentru foreach

// 12. Crearea unui baza de date SQL  ( cu tabele, coloane, randuri ) 
// Conexiunea la baza de date PHP
// Inserarea in baza de date => formular register
// afișarea utilizatorilor din baza de date utilizând bucla while


?>
