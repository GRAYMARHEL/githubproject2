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
<!-- dota2 heroes -->

  <!-- <div class="logo2"> 
   <a class="heroes1" href="#">
  <img class="logo" src="{{asset('images/abaddon.png')}}" alt="">&nbsp;
  <img class="logo" src="{{asset('images/alchemist.png')}}" alt="">&nbsp;
 <img class="logo" src="{{asset('images/ancient.png')}}" alt="" >&nbsp;
 <img class="logo" src="{{asset('images/antimage.png')}}" alt="" >&nbsp;
  <img class="logo" src="{{asset('images/arc.png')}}" alt="" >&nbsp;
  

  </div>

  <div class="logo2"> 
   <a class="heroes1" href="#">
        <img class="logo" src="{{asset('images/axe.png')}}" alt="" >&nbsp;
        <img class="logo" src="{{asset('images/bane.png')}}" alt="" >&nbsp;
        <img class="logo" src="{{asset('images/bat.png')}}" alt="" >&nbsp;
        <img class="logo" src="{{asset('images/beastmaster.png')}}" alt="" >&nbsp;
        <img class="logo" src="{{asset('images/bloodseeker.png')}}" alt="" >      
    </a>
  </div> -->
  <div class="logo2"> 
    <div class="logo1">
                <img class="box" src="images/abaddon.png" alt="">
                <img class="box" src="images/alchemist.png" alt="">
                <img class="box" src="images/ancient.png" alt="">
                <img class="box" src="images/antimage.png" alt="">
                <img class="box" src="images/arc.png" alt="">
    </div> 
  </div>    

  <div class="logo2"> 
    <div class="logo1">
                <img class="box" src="images/axe.png" alt="">
                <img class="box" src="images/bane.png" alt="">
                <img class="box" src="images/bat.png" alt="">
                <img class="box" src="images/beastmaster.png" alt="">
                <img class="box" src="images/bloodseeker.png" alt="">
    </div> 
  </div>    









    
      
  </body>
</html>