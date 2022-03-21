<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>
<style>
    
    body{
        color: red;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       
    }
    h2{
        color: white;
        
    }
    h5{
        color: white;
        text-transform: uppercase;
        font-size:1.5rem;
    }
    .details{
        padding: none;
        position: absolute;
        margin-left: 15rem;
        margin-top: 10rem;
        z-index: 2;
    }
    .s{
        padding: none;
        position: absolute;
        margin-left: 30rem;
        margin-top: 11.5rem;
        z-index: 2;
    }
    .second{
        padding: none;
        position: absolute;
        margin-left:56rem;
        margin-top: 10rem;
        z-index: 2;
    }
    .down{
        background-color: white;
        color: red;
        border:1px solid red;
        border-radius:5px;
        margin-left: 30rem;
        font-size: 1.2rem;
        padding: 1rem;
    }
    @media (max-width:780px) {
        img{
            width: 40rem;
            margin-left:-1rem;
        }
        body{
            font-size: 0.7rem;
        }
        .second{
            margin-left: 37rem;
        }
        .details{
            margin-left: 9rem;
        }
        .s{
            margin-left: 24rem;
        }
       .down{
            background: red;
            color: white;
            margin-left: 20rem;
            margin: 0% auto;
            margin-top: 2rem;
        }
    }

    .cont{
        margin: 10% auto;
    }
    table{
        margin: 10% auto;
        border: 1px solid #ccc;
        width: 80%;
    }
    td{
        padding: 10px;
        border: 1px solid #ccc;
    }
    
</style>
<body>

<?php
$hash = $_COOKIE['hash'];
$conn = mysqli_connect("localhost", "root", "", "Movie") or die("Error : " . mysqli_error($conn));
$sql = "select * from ilorin where user_hash = '$hash' order by id desc limit 1";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res) > 0){
    while($row = mysqli_fetch_array($res)){
        $title = $row['Title'];
        $name = $row['Name'];
        $seat = $row['seat'];
        $date = $row['Date'];
        $time = $row['time'];
    }
}
?>

<div class="cont" id="xyz">
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><?php echo $title; ?></td>
        </tr>
        <tr>
            <td>Seat</td>
            <td><?php echo $seat; ?></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><?php echo $date; ?></td>
        </tr>
        <tr>
            <td>Time</td>
            <td><?php echo $time; ?></td>
        </tr>
    </table>
    <button class="down" id="printBtn" onclick="downloadImg()">Download</button>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/html2canvas2.min.js"></script>
    <script>
        function downloadImg(){
            $('#printBtn').css('display', 'none');
            var filename = "ticket";
        html2canvas(document.getElementById("xyz"), {
            allowTaint: false,
            useCORS: false
        }).then(function (canvas) {
            var anchorTag = document.createElement("a");
            document.body.appendChild(anchorTag);
            $("#previewImg").html(canvas);
            anchorTag.download = filename+".png";
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';
            anchorTag.click();
        });
        }
        </script>
</body>
</html>