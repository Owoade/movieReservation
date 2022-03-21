
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./booking.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Payment</title>
    <link rel="stylesheet" href="assets/css/style-starter.css">
<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
</head>
<body>
    
    <div class="payment-container">
        <div class="payment-reciept" id="payment-reciept">
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-play icon-log"
                aria-hidden="true"></span>
            MoviePoint </a></h1>
            <strong>Payment Reciept</strong>
            <p>Name: <strong><?php echo $_GET['fullname'] ?> </strong> </p>
            <p>E-mail: <strong><?php echo $_GET['email'] ?> </strong>  </p>
            <p>Movie: <strong> <?php echo $_GET['movie_name'] ?> </strong>  </p>
            <p>Amount paid: <strong> <?php echo $_GET['amount'] ?> </strong> </p>
            <p>Status: <strong><?php echo $_GET['status'] ?></strong>  </p>
            <p>Reference no: <strong> <?php echo $_GET['ref'] ?></strong>   </p>
            <p>Date: <strong><?php echo date('d')."-".date('m')."-".date("Y")."  ".date("G").":".date("i").":".date("s") ?></strong></p>
            <div class="form-submit">
                <button onclick="print()">Print reciept</button>
            </div>
            <a href="booking.php?fullname=<?php echo $_GET['fullname'] ?>&&movie_name=<?php echo $_GET['movie_name'] ?>">Proceed to booking</a>
        </div>
    </div>
    <style>
        p{
            text-align:left;
            margin:1em 0;
        }a{
            font-size:14px;
        }
    </style>
</body>
<script src="https://js.paystack.co/v1/inline.js"></script>
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
<style>
    body{
        background-color: rgb(204, 204, 204);
    }
    .payment-card,.payment-reciept{
        width: 400px;
        margin: 2em auto;
        background-color: white;
        padding: 1em 2em;
        border-radius: 20px;
    }
    .payment-card h1,.payment-reciept{
        text-align: center;
    }
    .payment-card select{
        width: 100%;
        background-color: transparent;
        border: none;
        border-bottom: 1px solid black;
    }
    .payment-card option{
        background-color: transparent;
    }
    .payment-card form {
        margin: 2em 0;
    }
    .form-group{
        margin: 1em 0;
    }
    .form-group *{
        display: block;
    }
    .form-group input{
        width: 100%;
        border:none;
        border-bottom: 1px solid black;
    }
    .form-submit button {
        width: 100%;
        display: block;
        background-color: #e83e8c;
        color: white;
        border: none;
        border-radius: 20px;
        padding: .5em 0;
        margin: 1em 0;
    }

</style>
<script>
   if(location.href.split("?").length == 1){
       location.replace("payment.html")
   }
</script>
</html>