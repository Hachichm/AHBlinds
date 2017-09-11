<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>A&H Finest Blinds</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
    rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">

</head>

<body>

<a href="index.php" style="text-decoration:none;"><div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">A&H Blinds</div></a>
  <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Top Quality Blinds For The Lowest Prices Available</div>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
    <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php">A&H Blinds</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                    
                  </a>
          </li>
          <li class="nav-item px-lg-4">
          <div class="dropdown">
            <a class= "nav-link text-uppercase text-expanded "  href = "#" data-toggle="dropdown" data-hover="dropdown">
            Our Blinds<span class="caret"></span>
</a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <a class="nav-link text-uppercase text-expanded" href="venetian.html">Venetian</a>
      <a class="nav-link text-uppercase text-expanded" href="roller.html">Roller</a>
      <a class="nav-link text-uppercase text-expanded" href="roman.html">Roman</a>
      <a class="nav-link text-uppercase text-expanded" href="wooden.html">Wooden Venetian</a>
      <a class="nav-link text-uppercase text-expanded" href="vertical.html">Vertical</a>
      <a class="nav-link text-uppercase text-expanded" href="blackout.html">Blackout</a>
      </div>
    </div>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact Us
                    <span class="sr-only">(current)</span>
                </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">


    <div class="bg-faded p-3 my-3">
      <hr class="divider">
      <h2 class="text-center text-lg text-uppercase my-0">Contact
        <strong>Form</strong>
      </h2>
      <hr class="divider">
      <form action= "" method="post">
        <div class="row">
          <div class="form-group col-lg-4">
            <label class="text-heading">Name</label>
            <input type="text" name="first_name">
          </div>
          <div class="form-group col-lg-4">
            <label class="text-heading">Email Address</label>
            <input type="text" name="email">
          </div>
          <div class="form-group col-lg-4">
            <label class="text-heading">Phone Number</label>
            <input type="text" name="telNo">
          </div>
          <div class="clearfix"></div>
          <div class="form-group col-lg-12">
            <label class="text-heading">Message</label>
            <textarea class="form-control" rows="6" name="message" cols="100"></textarea>
            <!-- <textarea rows="6" ></textarea> -->
          </div>
          <div class="form-group col-lg-12">
          <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
        </div>
      </form>
    </div>
  



  
  <!-- /.container -->  


    <?php 

if(isset($_POST['submit'])){
    $to = "asherkhan123@hotmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $telNo = $_POST['telNo'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'] . " contact number is " . $telNo;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    alert( "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.");
    }
?>

<div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>A&H Blinds</strong>
        </h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
              <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=51.5089,-0.3497&amp;spn=56.506174,79.013672&amp;t=m&amp;z=15&amp;output=embed"></iframe>
            </div>
          </div>
          <div class="col-lg-4">
            <h5 class="mb-0">Phone:</h5>
            <div class="mb-4">020 8810 0001</div>
            <h5 class="mb-0">Email:</h5>
            <div class="mb-4">
              <a href="mailto: asherkhan123@hotmail.com"> asherkhan123@hotmail.com</a>
            </div>
            <h5 class="mb-0">Address:</h5>
            <div class="mb-4">
            <p>Coming Soon</p>
            </div>
          </div>
        </div>
              </div>
              </div>

              <footer class="bg-faded text-center py-5">
              <div class="container">
                <footer class="text-center">
                  <div class="footer-above">
                    <div class="container">
                      <div class="row">
                        <div class="footer-col col-md-4">
                          <h3>Contact Us</h3>
                          <p>Address:</p>
                          <p>Coming Soon</p>
                          
                        </div>
                        <div class="footer-col col-md-4">
                          <h3>Social media</h3>
                          <a href=https://www.facebook.com/AHBlinds/>
                          <img src="img/fb.jpg" style="width: 65px ; height:65px;" >
                          <a href=https://www.twitter.com/TwitterUK>
                          <img src="img/twitter.jpg" style="width: 50px; height:50px;" alt="" href="www.twitter.com/TwitterUK">
                          </a>
           
                        </div>
                        <div class="footer-col col-md-4">
                          <h3>Office opening hours</h3>
                          <p>Telephone:
                            <br><strong>020 8810 0001</strong></p>
                          <p><strong>Monday - Saturday</strong> 9am – 9pm</br> <strong>Sunday</strong> 9am – 6pm
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-below">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12"></br></br>
                          <p class="m-0">Copyright &copy; Mahmoud Hachich 2017 - Hachich.m@hotmail.com </p>
                        </div>
                      </div>
                    </div>
                  </div>
          
              </div>
              </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>

</body>

</html>