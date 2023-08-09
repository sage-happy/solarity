<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
     integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Solarity</title>
</head>
<body>
    <!--Navigation pane-->
    <div class="navbar">
        <span>
            <img id="logo-img" src="image/logo.jpg" alt="Logo"/>
            <p class="logo">SOLARITY</p>
        </span>
        <ul class="nav-links">
            <li><a href="landing.php">Home</a></li>
            <li><a href="landing.php#performance">Performance</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
        </ul>
        <img src="image/menu.png" alt="" class="menu-btn">
    </div>
    <!--End of navigation pane-->

    <!--Contact section-->
    <section class="contact" id="contact">
      <div class="row" data-aos="fade-up" data-aos-delay="50">
        <div class="col-12">
          <h2 class="d-flex justify-content-center fs-42">Contact Us</h2>
          <div class="line mb-5"></div>
        </div>
        <div class="col-lg-6 mb-4">
          <h5 class="text-center">Reach out to us for any inquiries or feedback.</h5>
          <div class="contact-details">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 border border-warning m-2 text-center">
                  <i class="fas fa-map-marker-alt fa-4x" style="margin-top: 6px; color: #4a83ee;"></i> 
                  <h3>Our Address</h3> 
                  <p>Chichiri 3, Blantyre</p>
                </div>
                <div class="col-lg-5 border border-warning m-2 text-center">
                  <i class="fas fa-envelope fa-4x" style="color: rgb(241, 83, 83)"></i>
                  <h3>Email Us</h3>   
                  <p>sorality@gmail.com</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 border border-warning m-2 text-center">
                  <i class="fas fa-phone fa-4x" style="margin-top: 6px; color: #4a83ee;"></i>
                  <h3>Call Us</h3>   
                  <p>(265) 8808-11888</p>
                </div>
                <div class="col-lg-5 border border-warning m-2 text-center">
                  <i class="fas fa-globe fa-4x" style="margin-top: 6px; color: lightgreen"></i>  
                  <h3>Visit Us</h3> 
                  <p>www.soralityweb.com</p>
                </div>
            </div>
          </div>          
        </div>
        <div class="col-lg-6">
          <!--Form to be sent to solarity email for quotation of solar services-->
          <div id="form-container">
             <form action="https://formsubmit.co/happymatekenya123@gmail.com" method="POST">  <!--method="post" role="form" class="php-email-form" -->
                <div class="row">
                  <div class="col-lg-6 form-group mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-lg-6 form-group mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mb-3">
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center mt-4"><button class="btn btn-warning" type="submit">Send Message</button></div>
              </form>
          </div>
        </div>
      </div>
    </section>

<!--Footer section-->
<footer>
        <div class="footercontainer">
            <div class="socialicons">
                <a href="" target="_blank"><i class="fa-brands fa-facebook fa-3x" style="color: #2b63c5;"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram fa-3x" style="color: #fb3958"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-twitter fa-3x" style="color: blue"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-youtube fa-3x" style="color: #fb3958"></i></a>
            </div>
            <div class="footernav">
                <ul>
                    <li><a href="landing.php">Home</a></li>
                    <li><a href="landing.php#performance">Performance</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <p2 class="designer">Happy</p2> </p>
        </div>
    </footer>
    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const navlinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
      function sendEmail(){
        Email.send({
          Host : "smtp.gmail.com",
          Username : "happymatekenya123",
          Password : "saramikehappy",
          To : 'happymatekenya123@gmail.com',
          From : document.getElementById("email").value,
          Subject : document.getElementById("subject").value,
          Body : document.getElementById("message").value
          }).then(
            message => alert("Message sent successfully!")
            );
        }
    </script>
</body>
</html>
<!--secureToken: 391b474b-8cc3-40e3-8143-4c23acd999f1  -->