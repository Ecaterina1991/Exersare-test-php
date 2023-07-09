<?php
$servername = "127.0.0.1";
$username = 'root';
$password = '';
//$database = 'mydb';

$conn = new mysqli($servername, $username, $password);


//mysqli procedural

if(!$conn) {
  die("Conexiune esuata".mysqli_connect_error());
}
echo "Conexiune reusita prin mysqli procedural";



//Create a MySql Database 


//Creare baza de date procedural

$sql = "CREATE DATABASE mydb_procedural";
if(mysqli_query($conn, $sql)) {
  echo "Baza de date creata cu succes - procedural";
} else {
  echo "Eroare" . mysqli_error($conn);
}
mysqli_close($conn);



?>