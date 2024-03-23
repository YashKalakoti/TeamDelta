<?php 
$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $Name = $_POST["Name"];
    $Password = $_POST["Password"];

    $sql = "select * from signin where name='$Name' AND password ='$Password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['Name'] = $Name;
        header("location: home.php"  );
    }
    else{
        $showerror = "Invalid Credentials!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodbook login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background:url(img4.jpg);
        background-size:cover;
    }
    .container{
        padding:6px;
        /* border:5px solid white; */
        position:absolute;
        top:23%;
        left:36%;
        border-radius:18px;
        /* box-shadow:white 2px 3px,2px 3px inset white; */
        backdrop-filter: blur(50px);
        
    }
    .container:hover{
        /* backdrop-filter:brightness(80%); */
        backdrop-filter:contrast(60%);
    }
    .container h1{
        font-family: 'roboto',sans-serif;
        font-weight: bolder;
        color:white;
        font-size: 45px;
        /* text-shadow:2px 2px grey; */
    }
    .container h3{
        font-family: 'roboto',sans-serif;
        color:white;
        margin-top:-7%;
        margin-left: 29%;
        /* text-shadow:1px 1px grey; */
        background:transparent;
    }
    .box{
        margin-top: 25px;
        margin-left: 128px;
        background: transparent;
    }
    input{
        border-radius: 5px;
        background: transparent;
        border:none;
        outline:none;
        border:2px solid white;
        height:19px;
        width:155px;
    }
    ::placeholder{
        color:white;
        opacity:10;
    }
    .btn{
        height: 26px;
        width:48px;
        margin-top: 25px;
        margin-left:183px;
        color:white;
        cursor:pointer;
        border:none;
        outline:none;
        border:2px solid white;
        background: transparent;
        text-decoration:underline;
    }
    .container b{
        color:white;
    }
    .link{
        text-decoration:none;
    }
    .link2{
        text-decoration:none;
        margin-left:8px;
        cursor:pointer;
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
    if($login){
        echo'<div class="alert alert-success">
        <span class="alert-message">hurray!!you have logged-in successfully!!</span>
        <button class="close-btn">&times;</button>
      </div>';
    }
    ?>
    <div class="container">
        <h1>Welcome to FoodBook</h1>
        <h3>please login to join us</h3>
        <form action="/HACKATHON/login.php" method="post">
            <div class="box">
            <input type="Name" name="Name" id="Name" placeholder="Enter Your Name" >
            <i class='bx bxs-smile' ></i>
            </div>
            <div class="box">
            <input type="Password" name="Password" id="Password" placeholder="Enter Your Password">
            <i class='bx bxs-lock-alt'></i>
            </div> 
            <a class="link "href=""><button class="btn">login</button></a>
        </form>
        <a class="link2"href="/HACKATHON/signup.php"><b>new with us? sign-in</b></a>
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