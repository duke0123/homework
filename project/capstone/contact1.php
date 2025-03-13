<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Throneofgamers</title>
  <link href="css/contact1.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    body {

      background-image: url('https://images.unsplash.com/photo-1652197881268-d625ad54402b?q=80&w=1635&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D=100');

      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;


    }

    hr {
      height: 2px;
      background-color: red;
    }

    a {
      color: white
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
      <ul class="navbar-nav">

        <a class="nav-link active" aria-current="page" href="capstone.html">Home</a>


        <a class="nav-link" href="news1.html">News</a>


        <a class="nav-link" href="deals.html">Deals</a>


        <a class="nav-link" href="gameroom.html">Game Room</a>


        <a class="nav-link" href="contact1.php">Contact</a>

      </ul>
    </div>
    </div>
  </nav>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner d-none d-sm-block">
      <div class="carousel-item active c-item">
        <img src="../photoshop/images/RWwWsi4LzHvmXtNDC9FvfD.jpg" class="d-block w-100 c-img" alt="...">
      </div>
      <div class="carousel-item c-item">
        <img src="../photoshop/images/2k255.jpg" class="d-block w-100 c-img" alt="...">
      </div>
      <div class="carousel-item c-item">
        <img src="../photoshop/images/black.jpg" class="d-block w-100 c-img" alt="...">
      </div>
      <div class="carousel-item d-item">
        <img src="../photoshop/images/gta7.jpg" class=" d-block w-100 d-img" alt="...">
      </div>
      <div class="carousel-item d-item">
        <img src="../photoshop/images/ghost-of-tsushima-2560x1080-12072.jpg" class="d-block w-100 d-img" alt="...">
      </div>
      <div class="carousel-item d-item">
        <img src="../photoshop/images/Space-Marine-2-logo.jpg" class="d-block w-100 d-img" alt="...">
      </div>
      <div class="carousel-item d-item">
        <img src="../photoshop/images/download.jpeg" class="d-block w-100 d-img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br />
  <br />
  <br />
  <br />
  <br />
  <p></p>
  <br />
  <br />
  <br />


  <?php

  require_once 'dbconnect.inc.php';

  if (isset($_POST["submit"])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $country = $_POST["country"];
    $message = $_POST["messages"];


    $query = "INSERT INTO contact (fname, lname, country, messages) VALUES ( ?, ?, ?, ?)";

    $stmt = $db->prepare($query);

    $stmt->bindParam(1, $firstname);
    $stmt->bindParam(2, $lastname);
    $stmt->bindParam(3, $country);
    $stmt->bindParam(4, $message);

    if ($stmt->execute()) {
      echo "<script>alert('Form submitted successfully!')</script>";
    } else {
      echo "Error: Could not submit the form.";
    }
  }
  ?>


  <div class="container bg-dark">

    <form method="post" action="">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Your name.." required>

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

      <label for="country">Country</label>
      <select id="country" name="country" required>
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
        <option value="USA">USA</option>
      </select>


      <label for="message">message</label>
      <textarea id="message" name="messages" placeholder="Write something.." style="height:200px" required></textarea>

      <input type="submit" name="submit" value="Submit">

    </form>
  </div>



























  <br />
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />







  <div class="box4 bg-dark">

    <div class="container">


      <div class="row text-center text-md-left">

        <div class="col-lg-4  ">
          <h5 class="text-uppercase font-weight-bold text-warning">Contact Us</h5>

          <p>(561)-111-1111</p>

          <p> TOG@gmail.com</p>

        </div>



        <div class="col-lg-4 ">
          <h5 class="text-uppercase font-weight-bold text-warning"> Copyright &copy; TOG 2024</h5>
          <a href="#">Top of page</a>
        </div>



        <div class=" col-lg-4">
          <h5 class="text-uppercase font-weight-bold text-warning">Other Sites</h5>
          <p><a href="http://www.gamefaqs.com" target="_blank">gamefaqs.com</a></p>
          <p><a href="http://www.ign.com" target="_blank">ign.com</a></p>
          <p><a href="http://www.gamespot.com" target="_blank">gamespot.com</a></p>
        </div>


      </div>
    </div>
  </div>










  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="script1.js"></script>
</body>

</html>