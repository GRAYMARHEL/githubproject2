<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



    <style>
         body{
        background-color: #222125;
    }


      .gongs1{
        height:50vh;
        display:flex;
        color:white;
        text-align: center;
       
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

    <div>

      <h1 class="gongs1">CHOOSE YOUR HERO</h1>











    </div>






    
      
  </body>
</html>