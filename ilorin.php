<?php 
$conn = mysqli_connect("localhost", "root", "", "movie") or die("Error : " . mysqli_error($conn));

if (isset($_POST['go'])) {
  $name = $_POST['name'];
  $title = $_POST['movie'];
  $amount = $_POST['date'];
  $week = $_POST['dateweek'];
  $gmail = $_POST['phone'];
  $seat = $_POST['seat'];
  $reserve = $_POST['time'];
  $hash = $_COOKIE['hash'];

  $insert = "insert into ilorin(Name, user_hash, Title, Date, Phone, time, seat, Dateweek) values('$name', '$hash', '$title', '$amount',  '$gmail', '$reserve', '$seat', '$week')";
  if (mysqli_query($conn, $insert)) {
    echo "<script>alert('success');
    win</script>";
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
<body>
    <div class="container">
        <h2>Book Ticket</h2>
       
        <form class="form-group" action="./ilorin.php" method="POST">
            
            <div id="form">
 <h1 class="text-white text-center" style="color: white; text-align:center;">Book Ticket - Watts Cinema,Ilorin,Nigeria</h1>
                <div id="first-group">

                    <div id="content">
                        <input type="text" id="input-group" name="name" placeholder="Fullname" required/>
                    </div>               
                    <div id="content">
                        <select id="input-group" name="movie" style="background-color: black;" required>
                            <option value="">Select Movie</option>
                            <option value="Avengers">Avengers</option>
                            <option value="Bad Boys for Life">Bad Boys for Life</option>
                            <option value="FrozenII">FrozenII</option>
                            <option value="Joker">Joker</option>
                            <option value="Mulan">Mulan</option>
                            <option value="My Spy">My Spy</option>
                            <option value="Scoob">Scoob</option>
                            <option value="Downhill">Downhill</option>
                            <option value="No Time to Die">No Time to Die</option>
                            <option value="Free guy">Free guy</option>
                            <option value="Jumanji:Next Level">Jumanji:Next Level</option>
                            <option value="Dolittle">Dolittle</option>
                        </select>
                    </div>     
                    <div id="content">
                        <input type="number" name="seat" placeholder="Select Number Of Seats" id="">
                    </div>
                </div>
               <div id="second-group">
                    <div id="content">
                        <input type="tel" name="phone" id="input-group" placeholder="+234....." required>
                    </div> 
                  
                    <div id="content">
                        <select id="input-group" name="dateweek" style="background-color: black;" required>
                            <option value="">Select Day Of The Week</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                    <div id="content">
                       <input type="date" name="date" id="" >
                    </div>
                    <div id="content">
                        <select id="input-group" name="time" style="background-color: black;"required>
                            <option value="">Select Time</option>
                            <option value="9am - 11am">9am - 11am</option>
                            <option value="12am - 2pm">12am - 2pm</option>
                            <option value="3pm - 5pm">3pm - 5pm</option>
                            <option value="7pm - 9pm">7pm - 9pm</option>
                        </select>
                    </div>

                </div>

                <button type="submit" name="go" value="Submit" id="submit-btn">Book Now</button>
            </div>
        </form>
        <a href="./ticket2.php"><button  id="submit-btn" >View Ticket</button></a>
    </div>
    
</body>
</html>