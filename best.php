<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>MOVIE TICKET</title>
    <link rel="stylesheet" href="best.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        
        <!-- <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">User</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name"></span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="./index.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        

      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic"> </div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text">
                <span>TOTAL TICKET BOOKED</span><?php
$conn = mysqli_connect("localhost", "root", "", "movie") or die("Error : " . mysqli_error($conn));
$select = "select * from ticket";
$result = mysqli_query($conn, $select);
            $tttt = mysqli_num_rows($result);
echo "<h2>".$tttt."</h2>";
?> </span>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic"></div>
            <div class="number"></div>
            <div class="indicator">
              <span class="text">    <span>TOTAL FOOD BOOKED</span><?php
$conn = mysqli_connect("localhost", "root", "", "movie") or die("Error : " . mysqli_error($conn));
$select = "select * from food";
$result = mysqli_query($conn, $select);
            $tttt = mysqli_num_rows($result);
echo "<h2>".$tttt."</h2>";
?> </span></span>
            </div>
          </div>
        </div>

       
      </div>

      <div class="courses">
        <div class="each-courses">
          <div class="title">TICKET - IBADAN</div>
          <div class="sales-details">
            <!-- <ul class="details">
              <li class="topic"></li>
             
            </ul>
            <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul> -->
          <?php
$select = "select * from ticket";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    echo "<table>
    <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>MOVIE NAME</th>
    <th>PHONE</th>
    <th>SEAT SELECTED</th>
    <th>DATE</th>
    <th>TIME</th>
    <th>DAY</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result)){
        $id = $row['Id'];
        $name = $row['Name'];
        $desc = $row['Title'];
        $amt = $row['Phone'];
        $time = $row['seat'];
        $purchased = $row['Date'];
        $circle = $row['time'];
        $cir = $row['Dateweek'];
        echo '
        <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$desc.'</td>
        <td>'.$amt.'</td>
        <td>'.$time.'</td>
        <td>'.$purchased.'</td>
        <td>'.$circle.'</td>
        <td>'.$cir.'</td>
        </tr>
        ';
    }
    echo "</table>";
}
else{
    echo "<h1>Nothing Here</h1>";
}


          
?>
          </div>
        </div>
        <!-- <div class="top-sales box">
          <div class="title">

          </div>
          <ul class="top-sales-details">
             <li>sfdad</li>
          </ul>
        </div> -->
      </div>
      <div class="courses">
        <div class="each-courses">
          <div class="title">TICKET - LAGOS</div>
          <div class="sales-details">
            <!-- <ul class="details">
              <li class="topic"></li>
             
            </ul>
            <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul> -->
          <?php
$select = "select * from lagos";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    echo "<table>
    <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>MOVIE NAME</th>
    <th>PHONE</th>
    <th>SEAT SELECTED</th>
    <th>DATE</th>
    <th>TIME</th>
    <th>DAY</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result)){
        $id = $row['Id'];
        $name = $row['Name'];
        $desc = $row['Title'];
        $amt = $row['Phone'];
        $time = $row['seat'];
        $purchased = $row['Date'];
        $circle = $row['time'];
        $cir = $row['Dateweek'];
        echo '
        <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$desc.'</td>
        <td>'.$amt.'</td>
        <td>'.$time.'</td>
        <td>'.$purchased.'</td>
        <td>'.$circle.'</td>
        <td>'.$cir.'</td>
        </tr>
        ';
    }
    echo "</table>";
}
else{
    echo "<h1>Nothing Here</h1>";
}


          
?>
          </div>
        </div>
        <!-- <div class="top-sales box">
          <div class="title">

          </div>
          <ul class="top-sales-details">
             <li>sfdad</li>
          </ul>
        </div> -->
      </div>
      <div class="courses">
        <div class="each-courses">
          <div class="title">TICKET - ILORIN</div>
          <div class="sales-details">
            <!-- <ul class="details">
              <li class="topic"></li>
             
            </ul>
            <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul> -->
          <?php
$select = "select * from ilorin";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    echo "<table>
    <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>MOVIE NAME</th>
    <th>PHONE</th>
    <th>SEAT SELECTED</th>
    <th>DATE</th>
    <th>TIME</th>
    <th>DAY</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result)){
        $id = $row['Id'];
        $name = $row['Name'];
        $desc = $row['Title'];
        $amt = $row['Phone'];
        $time = $row['seat'];
        $purchased = $row['Date'];
        $circle = $row['time'];
        $cir = $row['Dateweek'];
        echo '
        <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$desc.'</td>
        <td>'.$amt.'</td>
        <td>'.$time.'</td>
        <td>'.$purchased.'</td>
        <td>'.$circle.'</td>
        <td>'.$cir.'</td>
        </tr>
        ';
    }
    echo "</table>";
}
else{
    echo "<h1>Nothing Here</h1>";
}


          
?>
          </div>
        </div>
        <!-- <div class="top-sales box">
          <div class="title">

          </div>
          <ul class="top-sales-details">
             <li>sfdad</li>
          </ul>
        </div> -->
      </div>
      <div class="courses">
        <div class="each-courses">
          <div class="title">FOOD & DRINK</div>
          <div class="sales-details">
            <!-- <ul class="details">
              <li class="topic"></li>
             
            </ul>
            <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul>
          <ul class="details">
             
          </ul> -->
          <?php
$select = "select * from food";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    echo "<table>
    <tr>
    <th>S/N</th>
    <th>NAME</th>
    <th>FOOD</th>
    <th>DRINK</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result)){
        $id = $row['Id'];
        $name = $row['Name'];
        $desc = $row['Food'];
        $amt = $row['Drink'];
        echo '
        <tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$desc.'</td>
        <td>'.$amt.'</td>
        </tr>
        ';
    }
    echo "</table>";
}
else{
    echo "<h1>Nothing Here</h1>";
}


          
?>
          </div>
        </div>
        <!-- <div class="top-sales box">
          <div class="title">

          </div>
          <ul class="top-sales-details">
             <li>sfdad</li>
          </ul>
        </div> -->
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
