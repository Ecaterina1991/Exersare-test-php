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
