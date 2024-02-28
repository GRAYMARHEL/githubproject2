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
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body{
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);
        font-family: 'Poppins', sans-serif;
    }


    form{
        width: 24%;
        background-color: white;
        padding: 50px;
        border-radius: 20px;
        margin-top: 300px;
        
    }

    .btn-primary{
        width: 100px;
        border: none;
        border-radius: 50px;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);
        margin-left: 150px;

    }


</style>



  </head>
  <body>




  <form class="mx-auto" style="width: 500px">
    <h4 class="text-center">Login</h4>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">Forget password?</div>
  </div>
  
<a href="home" button type="submit" class="btn btn-primary">Login</button></a>

</form>



</body>
</html>