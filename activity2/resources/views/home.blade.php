<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
   
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


      <!-- fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">


    <style>
         body{
        background-color: #222125;
        font-family: "Merriweather", serif;
        font-weight: 300;
        font-family: "Radiance", "Noto Sans", sans-serif;
    }


    
    main {
      display: flex;
      flex-direction: column-reverse;
      box-sizing: border-box;
      justify-content: center;
      padding-top: 5rem;
      
    }

    h1 {
      align-self: center;
      font-size: 5rem;
      font-weight: 700;
    }

    p {
      text-align: center;
      font-size: 19px;
      font-weight: 300;
    }


    .box{
      justify-content:center ;
      display:text;
      padding:10px;
      border-radius:35px;
    }

    .logo1{
      justify-content:center;
      display:flex;
    }

    .box:hover{
      transform:scale(1.2);
      transition:0.5s;
    }

    .baba{
      justify-content:center;
      display:block;
    }
  

 




    </style>




  </head>
  <body>

    
        
    <nav class="navbar navbar-expand-lg navbar-dark">
   
      <div class="container">
        <a class="navbar-brand" href="#">
        <img class="logo" src="{{asset('images/pic1.png')}}" alt="" width="70" height="70">
        Dota 2 Heroes
     

        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a  class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/contact">Contact Us</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="/about">About Us</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="services1">Services1</a></li>
                <li><a class="dropdown-item" href="/services2">Services2</a></li>
                <li><a class="dropdown-item" href="/services3">Services3</a></li>
              </ul>
            </li>


          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    

  <main class="container text-white">

    <p>From magical tacticians to fierce brutes and cunning rogues, Dota 2's hero pool is massive and limitlessly diverse. </br>  Unleash incredible abilities and devastating ultimates on your way to victory.</p>
    <h1>CHOOSE YOUR HERO</h1>
  </main>
  
  
  </br></br></br>

 
    <div class="logo1">
                <img class="box" src="images/abaddon.png" alt="">
                <img class="box" src="images/alchemist.png" alt="">
                <img class="box" src="images/ancient.png" alt="">
                <img class="box" src="images/antimage.png" alt="">
                <img class="box" src="images/arc.png" alt="">
    </div> 
  
    <div class="logo1">
                <img class="box" src="images/axe.png" alt="">
                <img class="box" src="images/bane.png" alt="">
                <img class="box" src="images/bat.png" alt="">
                <img class="box" src="images/beastmaster.png" alt="">
                <img class="box" src="images/bloodseeker.png" alt="">
    </div> 

    <div class="logo1">
                <img class="box" src="images/bounty.png" alt="">
                <img class="box" src="images/brewmaster.png" alt="">
                <img class="box" src="images/bristleback.png" alt="">
                <img class="box" src="images/broodmother.png" alt="">
                <img class="box" src="images/centaur.png" alt="">
    </div> 

    <div class="logo1">
                <img class="box" src="images/chaos.png" alt="">
                <img class="box" src="images/chen.png" alt="">
                <img class="box" src="images/Clinkz.png" alt="">
                <img class="box" src="images/Clockwerk.png" alt="">
                <img class="box" src="images/Crystal.png" alt="">
    </div> 
    
    <div class="logo1">
                <img class="box" src="images/dark.png" alt="">
                <img class="box" src="images/darkwillow.png" alt="">
                <img class="box" src="images/Dawnbreaker.png" alt="">
                <img class="box" src="images/Dazzle.png" alt="">
                <img class="box" src="images/death.png" alt="">
    </div> 

    <br>    <br>    <br>    <br>   
    
    
    
    <div class="container pt-5 pb-5">
                <div class="row text-white">
                    <div class="col-md">
                        <a class="navbar-brand" href="home"><img class="img-fluid" src="images/pic1.png" alt="IAS " width="70" height="70"></a>
                        <h3>DOTA 2</h3>
                        <p style="text-align: justify;">Dota and the Dota logo are trademarks and/or registered trademarks of Valve Corporation. 2023 Valve Corporation, all rights reserved.</p>
                    </div>  

                    <div class="col-md">
                        <h3>Quick Links</h3>
                        <ul class="" style="list-style: none;">
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/services">Services</a></li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <h3>Follow Us</h3>
                        <button type="button" class="btn btn-outline-primary">Facebook</button>
                        <button type="button" class="btn btn-outline-info">Twitter</button>
                        <button type="button" class="btn btn-outline-warning">Instagran</button>
                    </div>
                </div>
            </div>

            <div class="container-fluid pt-3 bg-primary">
            <div class="row text-center">
                <div class="col">
                    <p class="text-white">Powered by <a href="https://laravel.com/" class="text-white">Laravel</a></p>
                </div>
            </div>
        </div>


            
  










    
      
  </body>
</html>