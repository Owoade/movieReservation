<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == "sanniusu" && $password = "123456"){
        echo '<script>alert("Welcome Admin");
        window.location.href="best.php"</script>';
    } else {
        echo '<script>alert("Invalid Details bro...hahahaha");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="style.css.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>login</h1>
        </div>
        <div class="main">
            <form action="" method="post">
                <span>   
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <input type="text" placeholder="Username" name="username" required/>
                </span><br>
                <span>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="password" name="" required/>
                </span><br>
                <button type="submit" name="login" id="submit" value="Submit">login</button>
            </form>

        </div>
    </div>
    
</body>
<script>
    // let password = document.getElementById("password");
    // let username = document.getElementById("username");
    // let sbmit = document.getElementById("submit");
    // let pass = "oreoluwa";
    // let user = "Sanni Uswat";
    // sbmit.addEventListener("click", Welcome);
    // alert("Welcome Admin")
    // function Welcome(){
    //     let username = username.value;
    //     let password = password.value;
    //     if (username == user && password == pass){
    //         alert("Login Sucessful");
    //     } 
    //     else{
    //         alert("You are wrong");
    //     }
    // }
</script>
</html>