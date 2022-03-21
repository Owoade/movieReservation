<?php 
$conn = mysqli_connect("localhost", "root", "", "movie") or die("Error : " . mysqli_error($conn));

if (isset($_POST['go'])) {
  $name = $_POST['name'];
  $title = $_POST['movie'];
  $amount = $_POST['date'];
  $week = $_POST['dateweek'];
  $gmail = $_POST['phone'];
  $email = $_POST['location'];
  $seat = $_POST['seat'];
  $reserve = $_POST['time'];

  $insert = "insert into ticket(Name, Title, Date, Location, Phone, time, seat, Dateweek) values('$name', '$title', '$amount', '$email', '$gmail', '$reserve', '$seat', '$week')";
  if (mysqli_query($conn, $insert)) {
    echo "<script>alert('success')</script>";
  } else {
    die("Error : " . mysqli_error($conn));
    echo "<script>alert('error')</script>";
    
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="./booking.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>
    
    
</style>
<body>
    <div class="container">
        <h2 class="bb">Book Ticket</h2>
        <a href="./booking.php"><h3>Watts Cinema, Ibadan, Nigeria</h3></a>
        <a href="./lagos.php"><h3>Watts Cinema, Lagos, Nigeria</h3></a>
        <a href="./ilorin.php"><h3>Watts Cinema, Ilorin, Nigeria</h3></a>
    </div>
    
</body>
</html>