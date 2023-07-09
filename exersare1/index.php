<?php

//functii anonime

// function today($a, $b, $callback) {
//   return $callback($a)+$callback($b);
//  }

// $a=5;
// $b=10;


// echo today($a,$b,function($x) {
// return $x;
// });


// // Exercițiul 1: Filtrare cu funcții anonime
// // Să presupunem că avem un array de numere întregi și dorim să filtrăm doar numerele pare. Utilizând o funcție anonimă, putem crea un filtru personalizat. Încercați să implementați următorul cod:

// function filter($arr, $callback) {
// return $callback($arr);
// }

// //$arr=[5,4,8,6,2,3,7];
// $arr=[40,11,50,6,90,4,3,7];

// echo filter($arr, function($x) use ($arr) {
//   $arr2=[];
//   for($i=0;$i<count($x); $i++){
//     if($x[$i]%2==0) {
//       $arr2[$i]=$x[$i];
//     }
//   }
//   echo "Numerele pare din sir sunt: ".implode(", ", $arr2).".";
// }
// )



 
// function cube($n)
// {
//     return ($n * $n * $n);
// }

// $a = [1, 2, 3, 4, 5];
// $b = array_map('cube', $a);
// print_r($b);

//array_map - primul parametru este numele functiei callback, al doilea parametru denumirea variabilei in care am depozitat arrayul asupra caruia vrem sa aplicam functia

//rezultatul functiei array_map se atribuie unei variabile 


// Exercițiul 2: Transformare cu funcții anonime
// Presupunem că avem un array de cuvinte și dorim să transformăm fiecare cuvânt în forma sa inversă. Utilizând o funcție anonimă și funcția array_map, putem realiza această transformare. Încercați să implementați următorul cod:


// function inversare($x) {
//   return strrev($x);
// }
// //aceasta este functia care devine callback function si care va fi folosita in array_map(). in ea se returneaza inversul fiecarui cuvant din array

// $arr = ["soare", "mare", "vara"];
// $result = array_map('inversare', $arr);
// print_r($result);


// Exercițiul 3: Sortare personalizată cu funcții anonime
// Presupunem că avem un array de numere întregi și dorim să le sortăm în ordine descrescătoare a valorii absolute. Pentru aceasta, putem utiliza o funcție anonimă în combinație cu funcția usort. Încercați să implementați următorul cod:

$arr=[4,5,-6,8,-3,9,4];

function cmp($a, $b){
if($a===$b){
  return 0;
}
return (abs($a)<abs($b)) ? 1 : -1;

}

usort($arr, "cmp");

//cmp devine functia callback utilizata in functia usort

foreach($arr as $item) {
  echo abs($item)."<br>";
}










?>