
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  height: 100%;
}
.modal {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}


.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #f40373;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #f40373;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}
.submit-button{
  font-size: 17px;
  display: block;
  border: none;
  outline: none;
background-color: transparent;
color: #fff;
  cursor: pointer;
}

/* .login-box a:hover {
  background: #f40373;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #f40373,
              0 0 25px #f40373,
              0 0 50px #f40373,
              0 0 100px #f40373;

} */

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #f40373);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #f40373);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 50px;
  background: linear-gradient(270deg, transparent, #f40373);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #f40373);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}


/* The Modal (background) */
.modal {
 /* display: none;Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content{
top: 40%;
  position: relative;

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  animation-name: animatetop;
  animation-duration: 0.4s}

@keyframes animatetop {
  from {top: -300px; opacity: 0}
  to {top: 40%; opacity: 1}
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  outline: 0;
  position: absolute;
  right: 5%;
  top: 3%;
 
  width: 32px;
  height: 32px;
  border: 0;
  background: 0;
  padding: 0;

  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #fff;
  transform: scale(1.5); 
  transition: all .2s ease-in-out;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>


<!-- Trigger/Open The Modal -->
<button id="myBtn">SIGN UP</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">

    <div class="login-box">
      <span class="close"> <a href="./index.php" class="close" style="text-decoration: none;"> &times;</a></span>

      <h2>SIGN UP</h2>
      <form action="./modalin.php" method="post" class="contact__form" required>

        <div class="user-box">
          <input type="text" required>
          <label>Name</label>
        </div>
        <div class="user-box">
          <input id="emailAddress" type="email" required/>

          <label>Email</label>
        </div>
        <div class="user-box">
          <input type="tel" name="Phone" required/>
          <label>Phone</label>
        </div>
        

        <div class="submit">

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <!-- Submit -->
            <input style="background: #f40373; padding:0.5rem 1rem; border-radius:0.5rem;" type="submit" value="SUBMIT" class="submit-button">

        </div>
        <span style="margin-top:2rem; color:white;">already have an account? <a href="modalin.php">Sign-In</a></span>
      </form>
    </div>
  </div>

</div>

<script>
// Get the modal
</script>

</body>
</html>
