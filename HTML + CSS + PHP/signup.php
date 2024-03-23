<?php
$alert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 include 'dbconnect.php';

 $Name = $_POST["Name"];
 $Age = $_POST["Age"];
 $Mobileno= $_POST["Mobileno"];
 $Password= $_POST["Password"];
 $sql = "INSERT INTO `signin` (`Name`, `Age`, `Mobile No`, `password`) VALUES ('$Name', '$Age', '$Mobileno', '$Password')";
 $result = mysqli_query($conn,$sql);
 if($result){
    $alert = true;
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBook sign-in</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Staatliches&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background-image:url(img2.jpg);
        background-size:cover;
    }
    .container{
        /* border: 2px solid white; */
        /* box-shadow:white 2px 3px,2px 3px inset white; */
        border-radius: 18px;
        background: transparent;
        backdrop-filter: blur(50px);
        padding:19px;
        position:absolute;
        top:28%;
        left:32%;
    }
    .container:hover{
        /* backdrop-filter:brightness(80%); */
        backdrop-filter:contrast(60%);
    }
    .container h1{
        font-family: 'Roboto',sans-serif;
        font-weight: bolder;
        color:white;
        font-size: 40px;
        /* text-shadow:2px 2px grey; */
    }
    .container h2{
        font-family: 'Roboto',sans-serif;
        color:white;
        margin-top:-7%;
        margin-left: 29%;
    }
    .box{
        margin-top: 25px;
        margin-left: 115px;
        background: transparent;
    }
    input{
        border-radius: 5px;
        background: transparent;
        border:none;
        outline:none;
        border:2px solid white;
    }
    ::placeholder{
        color:black;
        opacity:10;
    }
    .btn{
        margin-top: 20px;
        margin-left:130px;
        color:white;
        cursor:pointer;
        border:none;
        outline:none;
        border:2px solid white;
        background: transparent;
        text-decoration:underline;
    }
    .btn2{
        display:block;
        margin-top: -21px;
        margin-left:222px;
        color:white;
        cursor:pointer;
        border:none;
        outline:none;
        border:2px solid white;
        background: transparent;
        text-decoration:underline;
    }
.alert {
  padding: 15px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #dff0d8;
  color: #3c763d;
  display: flex;
  align-items: center;
}

.alert-message {
  flex-grow: 1;
  margin-right: 10px;
}

.close-btn {
  border: none;
  padding: 0 5px;
  background-color: transparent;
  cursor: pointer;
  font-size: 1.2rem;
  font-weight: bold;
  opacity: 0.5;
  transition: opacity 0.3s;
}

.close-btn:hover {
  opacity: 1;

}
</style>
<body>
    <?php
    if($alert){
        echo'<div class="alert alert-success">
        <span class="alert-message">dear user your sign-up is complete!! click on next to proceed further.</span>
        <button class="close-btn">&times;</button>
      </div>';
    }
    ?>
    <div class="container">
        <h1>Welcome New Friend</h1>
        <h2>Please Sign-In</h2>
    <form action="/HACKATHON/signup.php" method="post">
        <div class="box">
            <input type="Name" name="Name" id="Name" placeholder="Enter Your Name" >
            <i class='bx bxs-smile' ></i>
        </div>
        <div class="box">
            <input type="Age" name="Age" id="Age" placeholder="Enter Your Age" >
            <i class='bx bxs-calendar'></i>
        </div>
        <div class="box">
            <input type="Mobileno" name="Mobileno" id="mobileno" placeholder="Enter your Mobile No.">
            <i class='bx bxs-mobile'></i>
        </div>
        <div class="box">
            <input type="Password" name="Password" id="Password" placeholder="Set Your Password">
            <i class='bx bxs-lock-alt'></i>
        </div>
        <div>
        <a class="link" href=""><button class="btn">SUBMIT</button></a>
        </div>
    </form>
        <div>
            <a class="link2" href="/HACKATHON/home.php"><button class ="btn2">NEXT</button></a>
        </div>
<script>
const closeButtons = document.querySelectorAll('.close-btn');
closeButtons.forEach((button) => {
  button.addEventListener('click', () => {
    button.parentNode.remove();
  });
});
</script>
</body>
</html>