<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBook</title>
    <link rel="stylesheet" href="explore.css">
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
    .container1 {
      width:100%;
      height:100vh;
      background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://www.budgetbytes.com/wp-content/uploads/2023/08/Coconut-Curry-Chickpeas-bowl.jpg");
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
      .container1 {
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
    color:white;
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
        .recipe1{
            color:#fff;
            display:inline-block;
            width:100%;
            text-align: center;
            align-items: center;
            margin-top: 50px;
            background-color: transparent;
  -webkit-backdrop-filter: blur(50px);
  backdrop-filter: blur(50px);
  border-radius: 50px;
  width:90%;
  height:75%;
  align-items: center;
  margin-left: 45px;
        }
        .steps1{
            margin-top: 25px;
            font-size: 14px;
            text-align: center;
        }
        .head1{
            margin-top: 50px;
            font-size: 50px;
            text-align: center;
        }
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
            
            .recipe2{
                color:#fff;
                display:inline-block;
                width:100%;
                text-align: center;
                align-items: center;
                margin-top: 50px;
                background-color: transparent;
      -webkit-backdrop-filter: blur(50px);
      backdrop-filter: blur(50px);
      border-radius: 50px;
      width:90%;
      height:75%;
      align-items: center;
      margin-left: 45px;
            }
            .steps2{
                margin-top: 25px;
                font-size: 14px;
                text-align: center;
            }
            .head2{
                margin-top: 50px;
                font-size: 50px;}
                
                .container2 {
                    width:100%;
                    height:100vh;
                    background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://www.eatingwell.com/thmb/0acs9-JjacgAQXzuJ_6ZgoIajPI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/3879375-9eba674c941c4c90b2a4d6065aa58ad9.jpg");
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
                    .container2 {
                      background-attachment: scroll;
                    }
                  }
                  .recipe3{
                    color:#fff;
                    display:inline-block;
                    width:100%;
                    text-align: center;
                    align-items: center;
                    margin-top: 50px;
                    background-color: transparent;
          -webkit-backdrop-filter: blur(50px);
          backdrop-filter: blur(50px);
          border-radius: 50px;
          width:90%;
          height:75%;
          align-items: center;
          margin-left: 45px;
                }
                .steps3{
                    margin-top: 25px;
                    font-size: 14px;
                    text-align: center;
                }
                .head3{
                    margin-top: 50px;
                    font-size: 50px;}
                    
                    .container3 {
                        width:100%;
                        height:100vh;
                        background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://i.ytimg.com/vi/gwk3gM05zsQ/maxresdefault.jpg");
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
                        .container3 {
                          background-attachment: scroll;
                        }
                      }
                      .recipe4{
                        color:#fff;
                        display:inline-block;
                        width:100%;
                        text-align: center;
                        align-items: center;
                        margin-top: 50px;
                        background-color: transparent;
              -webkit-backdrop-filter: blur(50px);
              backdrop-filter: blur(50px);
              border-radius: 50px;
              width:90%;
              height:75%;
              align-items: center;
              margin-left: 45px;
                    }
                    .steps4{
                        margin-top: 25px;
                        font-size: 14px;
                        text-align: center;
                    }
                    .head4{
                        margin-top: 50px;
                        font-size: 50px;}
                        
                        .container4 {
                            width:100%;
                            height:100vh;
                            background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("https://themom100.com/wp-content/uploads/2012/09/best-grilled-cheese-sandwich-468-scaled.jpg");
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
                            .container3 {
                              background-attachment: scroll;
                            }
                          }
            

</style>
<body>
    <div class="container1">
        <div class="navbar">
          <h1 class="title">FoodBook</h1>
            <img src="https://i.pinimg.com/originals/e9/73/6d/e9736dc6bf9969d7a0b7168d4b21ba87.png" class="logo">
            <nav>
                <ul>
                    <li><a href="home.html">HOME</li>
                    <li><a href="explore.html">EXPLORE</li>
                    <li><a href="">CATEGORIES</li>
                    <li><a href="">CHAT</li>
                    <li><a href="signup.php">SIGN OUT</li>
            </nav>
        </div>
            <div class="recipe1">
                <h1 class="head1">CHICKPEA CURRY</h1>
                <p><br>INGREDIENTS:<br> Onions, Ginger, Garlic, Tomatoes, Boiled chickpea, Ground spices, Water<br><br></p>
                <p class="steps1">-  In a large pan, heat 2 tablespoon of oil over medium heat.<br>
                    -   Add 1/2 cups of chopped onions. <br>
                    -   cooked the onions until they turn golden, stirring every 2 minutes to prevent burning.<br>
                    -	Add 1 tablespoon finely chopped ginger and 1 tablespoon of finely chopped garlic. <br>
                    -	Saute with the onions until you can smell the garlic and ginger, about 1 to 2 minutes. Remember to stir to prevent burning.<br>
                    -	Turn the heat to low and add:<br>
                    -	1 1/2 teaspoons salt.<br>
                    -	1/2 to 1 1/2  teaspoons red chili powder or mild smoked paprika.<br>
                    -	¼ teaspoon ground turmeric.<br>
                    -	1 teaspoon ground cumin.<br>
                    -	1 1/4  teaspoon ground coriander.<br>
                    -	1 tablespoon curry powder.<br>
                    -	Toast the spices for 30 to 40 seconds and stir to keep them from burning.<br>
                    -	Once the spices become  aromatic, stir in the 1 1/3 cups fresh or 1 cup canned/bottled tomato pure.<br>
                    -	Cook it on medium heat for 4 to 5 minutes to remove the raw flavor of the tomatoes.<br>
                    -	Add 3 cups of boiled chickpea and chickpea water.<br>
                    -	Cover the pan and simmer the curry on low heat for 15 minutes, stirring every 5 minutes so the bottom of the curry doesn’t burn.<br>
                    -	Stir in 1/2 teaspoon garam masala and 1 teaspoon sugar ( optional ) <br>
                    -	Once the curry cools slightly, garnish with 1/4 cup cilantro leaves. Top the curry with some freshly squeezed lemon juice.</p>
                    <button type="button">Check Nutritions</button>
                </div>
    </div>
    <div class="container2">
                <div class="recipe2">
                    <h1 class="head2">OKRA FRY (BHINDI MASALA) </h1>
                    <p><br>INGREDIENTS:<br> Okra (bhindi), Onions, Ground spice, Green chili, Corianderr<br><br></p>
                    <p class="steps2">-	Rinse okra ( bhindi ) under running water. Drain them to a colander and wipe dry with tissue or cloth.<br>
                        -	TIP- Remember any moisture will make our bhindi slimy. <br>
                        -	Chop them to half pieces and set aside. <br>
                        -	Heat oil in pan. Once the oil is hot, reduce the oil is hot, reduce the flame and add 1/2 tablespoon cumin seeds. <br>
                        -	When the cumin begins to splutter and copped bhindi and stir fry on a medium heat.<br>
                        -	Keep stirring at regular intervals. Over doing it will make the bhindi more slimy so do it as needed only.<br>
                        -	Bhindi will begin to turn slimy after a minute.<br>
                        -	TIP- To reduce the slime you can use some lemon juice.<br>
                        -	While bhindi is getting fried you can add spices.<br>
                        -	1/2 Turmeric powder.<br>
                        -	1/2 Garam masala.<br>
                        -	1 tablespoon of salt.<br>
                        -	1 tablespoon of chili.<br>
                        -	1/2 spoon of green chili.<br>
                        -	Pour 1 tablespoon of oil in center of the pan.<br>
                        -	Fry your bhindi in low flame<br></p>
                        <button type="button">Check Nutritions</button>
                    </div>


        </div>
        <div class="container3">
            <div class="recipe3">
                <h1 class="head3">  EGG FRIED RICE</h1>
                <p><br>INGREDIENTS:<br> Eggs, Oil, Vegetables, Soy sauce, Ground spices, Boiled rice<br><br></p>
                <p class="steps3">-	Crack the eggs into a small bowl and beat them together.<br>
                    -	Heat a skillet with 1 tablespoon of oil over medium-high heat.<br>
                    -	Once the pan is hot, add the beaten eggs and scramble them for about a minute.<br> Transfer the eggs to a dish and turn off the heat.<br>
                    -	Drizzle the remaining 2 tablespoons of oil into a wok over high heat.<br> Add the onions and cook them for about 1 to 2 minutes, stirring constantly. <br>
                    -	Add the mixed vegetables and white parts of the scallions and cook for 2 minutes. <br>Season the vegetables with a pinch of salt.<br>
                    -	Add the cooked rice into the pan or wok and cook for 2 minutes, until the rice is heated through. <br>If there are large clumps of rice break them apart with the back of your spatula.<br>
                    -	Add the soy sauce, five-spice powder, dash of white pepper and sesame oil and stir to distribute the seasonings.<br>
                    -	Add the scrambled eggs and stir to mix again. Garnish with remaining sliced scallions.<br>
                    <button type="button">Check Nutritions</button>
                </div>
     </div>
     <div class="container4">
        <div class="recipe4">
            <h1 class="head4"> GRILLED CHEESE SANDWICH</h1>
            <p><br>INGREDIENTS:<br> Butter ,Sliced cheese, Bread, Chilli flake, Oregano ,Black pepper powder <br><br></p>
            <p class="steps4">- Add 1 or 2 tablespoon butter to a hot pan and melt it.<br> Spread it with a spatula. When it melts, place the bread slices over the melted butter.<br> You can also smear the softened butter over the slices.
                - Toast the bread until golden brown one side of both the slices.<br>
                - Flip one of them and place 2 cheese slices or grated cheese on the hot toasted side. <br>Sprinkle the flavourings you prefer like black pepper, red chilli flakes and oregano.<br> Place the golden toasted side over the cheese.<br> Placing the cheese over the toasted hot bread helps the cheese to melt fast.<br>
                - Add some more butter to the pan. Flip with a spatula and toast on both the sides on a very low heat until the cheese melts off. <br>Take care not to burn. Halve the grilled sandwich and serve hot or warm.
                Cheese sandwich is ready to enjoy.<br>
                <button type="button">Check Nutritions</button>
            </div>
 <br>
