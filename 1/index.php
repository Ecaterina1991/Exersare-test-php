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

//nr prim este un numar care se divide doar la 1 si la el insusi.
// $i=1;
// while($i<100) {

//   $i++;
// }

// $isTrue = true;

// for($i=1; $i<=100; $i++) {

// }

//FUNCTII
//https://www.php.net/manual/en/indexes.functions.php

//1.
$abs = abs(-150);
echo $abs."<br>";
//transforma nr negative in pozitive

//2. functia inversa cosinusului
$acos = acos(0);
echo $acos."<br>"; //1.57...
// Returnează arcul cosinus al lui num în radiani. acos() este funcția inversă a lui cos(), ceea ce înseamnă că $num == cos(acos($num)) pentru fiecare valoare a lui a care se află în intervalul acos()'.

//3.
$acosh = acosh(5);
echo $acosh."<br>";//2.29...
//Returnează cosinusul hiperbolic invers al lui num, adică valoarea al cărei cosinus hiperbolic este num.

//4. add+c+slash-es
$string = "sunt string";
$caracter = "ui";
$addcslashes = addcslashes($string, $caracter);
echo $addcslashes."<br>";
//Returnează un șir cu bare oblice inverse înaintea caracterelor care sunt listate în parametrul caractere.

//5.
$input="I'll be a great programmer";
$output=addslashes($input);
echo $output."<br>";
//adauga caractere escape inaintea unor caractere speciale precum ghilimelele si caracterele de escape.

//6. construieste o noua instanta de atribut
//public AllowDynamicProperties::__construct()

//7.
//apache_child_terminate(): void
//odata ce executia codului php este finalizata, va inregistra executarea procesului Apache de executie a cererii php curente pentru finalizare. Poate fi folosit pentru a termina un proces, după ce a fost rulat un script cu un consum mare de memorie, deoarece memoria va fi de obicei eliberată doar intern, dar nu va fi restituită sistemului de operare. Funcționează în serverele web Apache și FastCGI.

//8. preia o variabila al mediului de executie Apache specificata

// $address = $apache_getenv("SERVER_ADDR");
// echo $address;

//9. 






?>