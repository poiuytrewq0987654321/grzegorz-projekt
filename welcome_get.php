<?php

$model_jachtu = $_GET["model_jachtu"];
$imie_nazwisko =  $_GET["imie_nazwisko"];
$adres = $_GET["adres"];
$telefon = $_GET["telefon"];
$email = $_GET["email"];
$data_od_kiedy = $_GET["data_od_kiedy"];
$data_do_kiedy = $_GET["data_do_kiedy"];

// Create connection
$conn = new mysqli("localhost", "root", "", "jachty");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
#echo "Connected successfully";
 
// Attempt insert query execution
$sql = "INSERT INTO jachty.rezerwacja (model_jachtu, imie_nazwisko, adres, telefon, email, data_od_kiedy, data_do_kiedy ) VALUES ('$model_jachtu', '$imie_nazwisko', '$adres', '$telefon', '$email', '$data_od_kiedy', '$data_do_kiedy')";
if(mysqli_query($conn, $sql)){
    header("Location: sukces.html");
    exit();
      // echo "rezerwacja poprawnie zapisana. Zapraszamy do naszej przystani w wybranym terminie!";
  } else{
    header("Location: sukces.html");
    exit();
      // echo "Kurczę, nie udało się. Spróbuj ponownie. Opis błędu: $sql. " . mysqli_error($conn);
  }
 
?>