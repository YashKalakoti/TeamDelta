<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBook</title>
    <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    *{
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  }
  body {
    animation: fadeInAnimation ease 3s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
}
@keyframes fadeInAnimation {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}
  .container {
    width:100%;
    height:100vh;
    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://img.freepik.com/free-photo/top-view-baked-chicken-veggies-plate-with-wedges-copy-space_23-2148682743.jpg");
      background-position: center;
      background-size: cover;
      padding-left:8%;
      padding-right:8%;
      box-sizing: border-box;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
  @media only screen and (max-device-width: 1366px) {
    .container {
      background-attachment: scroll;
    }
  }
  .navbar{
  height:12%;
  width:100%;
  display:flex;
  align-items:center;
  margin-left: 0%;
  transition: 1s;
  }
  .navbar:hover {
    background-color: transparent;
  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);
    color: white;
  }
  nav{flex:1;
  text-align: right; 
    text-shadow: 0 0 5px #999;
  }
  .logo{
    margin-left: 40px;
  width: 75px;
  cursor: pointer;
  }
  .menu-icon{
  width: 30px;
  cursor: pointer;
    margin-left:40px;
  }
  nav ul li{
  list-style: none;
  display: inline-block; margin-left:60px;
  }
  nav ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 13px
  }
  .row{
    width:1500px;
    display: inline-flex;
  height: 70%;
  align-items: center;
  text-decoration: none;
  }
  .col{
    display: flex;
    flex-basis: 50%;
    height: 100%;
    padding-left: 30px;
  }
  h1{color: #fff;
    font-size: 100px;}
  p{color: #fff;
    font-size: 11px; line-height: 15px;text-shadow: 0 0 5px #999;}
  h5{color: #fff;color: #fff;
text-shadow: 0 0 5px #999;}
  button{
  width: 180px;
  color: #000;
  font-size: 12px;
  padding: 12px 0;
  background: #fff;
  border: 0;
  border-radius: 20px;
  outline: none;
    margin-top:30px;
  }
  .card{
  width: 300px;
  height: 250px;
  text-align: center;
  display: inline-block;
  border-radius: 10px;
  padding: 20px 25px;
  box-sizing: border-box;
  cursor: pointer;
  margin: 10px 15px;
  background-position: center;
  background-size: cover;
    transition: transform 0.5s}
  .card1{
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://media.istockphoto.com/id/1321195603/photo/people-having-balanced-diet-from-lunch-boxes.jpg?s=612x612&w=0&k=20&c=yieHclin0zByT8mXbK1x7dlf_4bG6yqeBRszUjyYBbc=");
  }
  .card2{
  background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://img.freepik.com/free-photo/delicious-italian-pizza-wooden-table_23-2148643436.jpg") ;
  }
  .card3{
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://storage.googleapis.com/pai-images/8780c48126284ec3aebb2bdd4da2757c.jpeg") ;
  }
  .card4{
  background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("https://www.businessinsider.in/photo/67552032/indians-love-food-so-much-that-most-of-them-just-wont-go-on-a-diet-survey.jpg?imgsize=166212") ;
  }
  .card:hover{
    transform: translateY(-10px);}
  h1{
    font-size: 50px;
    width:235px;
    cursor: pointer;
  }
  .cust1{
    width: 600px;
    height: 400px;
    display: inline-block;
    margin-left: 300px;
    text-align: center;
    font-size: 100px;
    color: white;
    border-style: dashed;
    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://img.freepik.com/free-photo/top-view-delicious-pizza-wooden-table_23-2148643420.jpg");
  }
  .h6{
    color:white;
    font-size: 100px;
  }

  .yash{
    color:white;
    font-size: 15px;
  }
  .text {
    width:100%;
    height:100vh;
    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://plus.unsplash.com/premium_photo-1671403963864-6d46f3b62352?blend=000000&blend-alpha=10&blend-mode=normal&blend-w=1&crop=faces%2Cedges&h=630&mark=https%3A%2F%2Fimages.unsplash.com%2Fopengraph%2Flogo.png&mark-align=top%2Cleft&mark-pad=50&mark-w=64&w=1200&auto=format&fit=crop&q=60&ixid=M3wxMjA3fDB8MXxhbGx8fHx8fHx8fHwxNzEwODQ2MTkwfA&ixlib=rb-4.0.3");
      background-position: center;
      background-size: cover;
      padding-left:8%;
      padding-right:8%;
      box-sizing: border-box;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    @media only screen and (max-device-width: 1366px) {
      .text {
        background-attachment: scroll;
      }
    }
    .second{
      width:auto;
      display: inline-block;
      color: white;
    height: 40%;
    align-items:center;
    text-decoration: none;
    margin-top: 200px;
    text-align: center;
    background-color: transparent;
  -webkit-backdrop-filter: blur(30px);
  backdrop-filter: blur(30px);
  text-shadow: #000;
  border-radius: 30px;
    }
    .head2{
      color: white;
      font-size: 75px;
      margin-top: 40px;
    }
    .para4{
      color: white;
      font-size: 12px;
    }
    footer{
      height: 50px;
      width: 100%;
      display: inline-block;
      background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("https://barstoolsdirect.net/wp-content/uploads/2020/03/Footer-Background.jpg") ;
      text-align: center;
      padding-top: 40px;
      }
    .statement{
      color: white;
      font-size: 100px;
      display: inline-block;
      text-align: center;
      margin-left: 170px;
      margin-top: 100px;
    }
last{
  display: inline-block;
  width:100%;
  align-items: center;
}

</style>
<body>
    <div class="container">
        <div class="navbar">
          <h1 class="title">FoodBook</h1>
            <img src="https://i.pinimg.com/originals/e9/73/6d/e9736dc6bf9969d7a0b7168d4b21ba87.png" class="logo">
            <nav>
                <ul>
                    <li><a href="home.html">HOME</li>
                    <li><a href="/HACKATHON/explore.php">EXPLORE</li>
                    <li><a href="">CATEGORIES</li>
                    <li><a href="">CHAT</li>
                    <li><a href="login.php">SIGN OUT</li>
            </nav>

        </div>
        <div class="row">
                <h1>"Sharing Recipe Never Been So Easy"</h1>
                <button type="button">Create a Recipe</button>
                <div class="Customers">
                  <div class="cust1"><h6>Today's Top Pick</h6>
                  <p class="yash">
                    <br>
                    -	INGRIDIENTS :<br><br>Capsicum, Onion,<br> Mushroom, Tomato, Olive, sweet corn, <br>baby corn, etc.)<br>
                    - 2 cup all purpose flour<br>
                    - 100 grams processed cheese
                    -	100 ml tomato ketchup<br>
                    - 1 teaspoon oregano<br>
                    -	1 teaspoon chilli flakes<br>
                    -	½ cup mozzarella <br>
                    -	1 teaspoon baking powder<br>
                    -	1 tablespoon dry yeast <br>
                    -	1 teaspoon sugar<br>
                    -	Water as required<br>
                    -	2 teaspoon virgin olive oil<br>
                    </p>
                </div>
              
                </div>
                </div>
                
        <div class="col">
            <a href="explore.html"><div class="card card1">
                <h5>HEALTHY RECIPE</h5><br>
                <p>Click to explore a curated selection of nutritious and delicious recipes designed to nourish your body and tantalize your taste buds.</p>
            </div></a>
            <a href="explore.html"><div class="card card2">
                <h5>TASTE BUDS</h5><br>
                <p>Dive into a treasure trove of decadent delights and irresistible treats that are sure to ignite your senses and bring a smile to your face. </p>
            </div></a>
            <div class="card card3">
                <h5>POST YOUR OWN</h5><br>
                <p>Unleash your inner chef and showcase your unique recipes, cooking techniques, and foodie adventures to inspire others in our vibrant online community. </p>
            </div>
            <a href="login.php"><div class="card card4">
                <h5>LOGIN</h5><br>
                <p>By logging in, you'll be able to join discussions, connect with fellow foodies, and participate in exciting challenges and events. </p>
            </div></a>
            </div>
            </div>

            <div class="text"> 
              <div class="second">
                <h2 class="head2">ABOUT US<br></h2>
                <p class="para4"><br>Welcome to Food Book! We are a passionate team of four individuals united by our love for food and our shared vision of creating an engaging online platform for culinary enthusiasts worldwide. With backgrounds spanning computer science, culinary arts, photography, journalism, and community management, our team brings a diverse set of skills and expertise to the table. Together, we are dedicated to curating a rich culinary experience for our users, from developing aseamless website interface to capturing tantalizing food photography, crafting engaging content, and fostering a vibrant community. Our mission is to inspire, connect and empower food lovers to explore, share, and savor the endless possibilities of the culinary world. Join us on this delicious journey as we embark on a flavorful adventure together!</p>
                <button type="last">Know More</button><br>
            </div>
            <div class="statement">COOK. EAT. REPEAT.</div>
            </div>
            <footer>
              <p>
              FoodBook 2024 | All Rights Reserved.
              </p>
            </footer>
                </body>
                </html>
              
          
