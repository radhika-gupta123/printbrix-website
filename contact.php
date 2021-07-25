<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/53c71250a7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">



  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <a class="navbar-brand" href="index.php"><img src="images/favicon.png" alt="favicon">Printbrix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupportedcontent">
      <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarsupportedcontent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar dropdown" role="button" data-toggle="dropdown">Products</a>
          <div class="dropdown-menu" aria-labelledby="navbar dropdown">
            <a class="dropdown-item" href="design.php">Design For You</a>
            <a class="dropdown-item" href="build.php">Build a Kit</a>
            <a class="dropdown-item" href="order.php">Order in Bulk</a>
          </div>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar dropdown" role="button" data-toggle="dropdown">Company</a>
          <div class="dropdown-menu" aria-labelledby="navbar dropdown">
            <a class="dropdown-item" href="about.php">About us</a>
            <a class="dropdown-item" href="blog.php">Blog</a>

          </div>
        </li>
        <li class="navbar-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item1 active">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
        </li>
        <li class="nav-item2 active">
          <a class="nav-link" href="login.php"><i class="fas fa-user"></i>Login/signup</i></a>
        </li>







      </ul>
     </div>
    </nav>



<section class="my-5">
  <div class="py-5 container3">
    <h1 class="text-center">Send Us a Message</h1>
    <p class="text-center">Fill in your details and we’ll get back to you in no time.</p>
  </div>
  <div class="w-50 m-auto">
    <form class="" action="userinfo.php" method="post">

      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" value="" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email" value="" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Phone</label>
        <input type="text" name="Phone" value="" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Company</label>
        <input type="text" name="Company" value="" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" name="Message"></textarea>
      </div>
      <button type="submit" class="btn btn-success" name="button">Submit</button>
    </form>
  </div>
</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
