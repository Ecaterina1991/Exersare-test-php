<?php
$servername = "127.0.0.1";
$username = 'root';
$password = '';
//$database = 'mydb';

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
  die("Conexiune esuata" . $conn->connect_error); 
}
echo "Conexiune cu succes 1!";





//mysqli procedural

// if(!$conn) {
//   die("Conexiune esuata".mysqli_connect_error());
// }
// echo "Conexiune reusita prin mysqli procedural";



//Create a MySql Database 

// $sql = "CREATE DATABASE mydb4";

// if($conn->query($sql)===TRUE) {
//   echo "Baza de date creata cu succes2";
// } else {
//   echo "Incercare esuata".$conn->error;
// }
// $conn->close();


//Creare baza de date procedural

// $sql = "CREATE DATABASE mydb_procedural";
// if(mysqli_query($conn, $sql)) {
//   echo "Baza de date creata cu succes - procedural";
// } else {
//   echo "Eroare" . mysqli_error($conn);
// }
// mysqli_close($conn);

//PDO

try{
  $conn = new PDO("mysql:host=$servername", $username, $password);
  //set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE myDb101";
  //use exec()  bacause no results are returned
  $conn->exec($sql);

}
//https://www.w3schools.com/php/php_mysql_create.asp

?>