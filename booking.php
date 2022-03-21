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

  $insert = "insert into ticket(Name, user_hash, Title, Date, Phone, time, seat, Dateweek) values('$name', '$hash', '$title', '$amount', '$gmail', '$reserve', '$seat', '$week')";
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
<body>
    <div class="container">
        <h2>Book Ticket</h2>
        <form class="form-group" action="./booking.php" method="POST">
            <div id="form">
                <h1 class="text-white text-center">Book Ticket - Watts Cinema,Ibadan,Nigeria</h1>

                <div id="first-group">

                    <div id="content">
                        <input type="text" id="input-group" name="name" placeholder="Fullname" value="<?php echo $_GET['fullname'] ?>" required readonly/>
                    </div>               
                    <div id="content">
                        <input type="text" class="input-group" value="<?php echo $_GET['movie_name'] ?>" readonly>
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
                        <select id="input-group" name="location" style="background-color: black;">
                            <option value="">Select Your Location</option>
                            <option value="Watts Cinema,Ibadan,Nigeria">Watts Cinema,Ibadan,Nigeria</option>
                            <option value="Watts Cinema,Lagos,Nigeria">Watts Cinema,Lagos,Nigeria</option>
                            <option value="Watts Cinema,Ilorin,Nigeria">Watts Cinema,Ilorin,Nigeria</option>
                        </select>
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
                       <input type="date" name="date" id="">
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
    </div>
    
</body>

<script>
    const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_f094147f9582011ce24f0dae8cae84b07e7143f3', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  handler.openIframe();
}
</script>
<script>
   if(location.href.split("?").length == 1){
       location.replace("payment.html")
   }
</script>
</html>