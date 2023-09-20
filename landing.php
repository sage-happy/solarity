<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarity</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <?php $_SESSION['email']."<br>".$_SESSION['password'];?>
    <div class="navbar">
        <span>
            <img id="logo-img" src="image/logo.jpg" alt="Logo"/>
            <p class="logo">SOLARITY</p>
        </span>
        <ul class="nav-links">
            <li class="active" id='list1'><a href="#" id="nav-link1">Home</a></li>
            <li id='list2'><a href="#" id="nav-link2">Performance</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <img src="image/menu.png" alt="" class="menu-btn">
    </div>
    <header id="home">
        <div class="header-content">
            <h2 class="bg-primary text-light d-inline p-2">A World Full of Possibilities</h2>
            <div class="line mt-3"></div>
            <h1>Solarity</h1>
        </div>
    </header>
    <section class="content" id="performance"> <!--//  -->
        <div class="title">
          <h1>Performance</h1>
        <div class="line"></div>
      </div>
      <div class="toggle-button">
        <button class="btn btn-warning" id="toggleSectionBtn">Chart</button>
        <button class="btn btn-warning" id="tableBtn">Table</button>
      </div>
      <!-- <span id="search-bar" class="" style="float: right; padding-top: 50px; padding-bottom: 20px;">
          <form action="php/search.php" role="form" class="search-form" accept-charset="utf-8" method="post">
            <div class="btn-group d-flex justify-content-center ml-20px">
              <input class="search" type="text" name="search" placeholder=" Search" style=" width: 250px;">
              <input class="btn btn-primary" type="submit" value="Go">
            </div>
          </form>
        </span> -->
    <section id="chart-section">
        <div class="rendering-section">
            <div class="solar-section">
              <div class="image-div" id="svchart">
                  {{

                    function jkjj+(){

                    }
                  }}
                <?php include('php/svdata.php');?>
              </div>
              
              
              <!-- <script>
                // Function to refresh the Performance section content
                function refresh() {
                    // Use AJAX to fetch updated content from the server
                    $.ajax({
                        url: 'php/svdata.php', // Create a PHP script to fetch updated data
                        method: 'GET',
                        dataType: 'html', // Change the dataType based on your response format
                        success: function (response) {
                            // Update the content of the performance section
                            $('#svchart').html(response);
                        },
                        error: function (error) {
                            console.error('Error fetching updated data:', error);
                        }
                    });
                }

                // Refresh the Performance section every 5 seconds (adjust the interval as needed)
                setInterval(refresh(), 5000);
            </script> -->

              <div class="image-div" id="scchart"></div>
              <?php include('php/scdata.php');?>

              <div class="image-div" id="stchart"></div>
              <?php include('php/stdata.php');?>
            </div>
          
           <div class="load_section">
            <div class="image-div" id="lcchart"></div>
            <?php include('php/lcdata.php');?>

            <div class="image-div" id="lvchart"></div>
            <?php include('php/lvdata.php');?>
          </div>

          <div class="bat_soc">
            <div class="image-div" id="socchart"></div>
            <?php include('php/socdata.php');?>
          </div> 
        </div>
      </section>

        <section id="table-section" style="display: none;">
            <div class="table-container">
                <?php include('php/table.php');?>
            </div>
        </section>
        <script type="text/javascript" src="js/btnSwitch.js"></script>

        <div class="download-button">
            <label id="download-link" href="#">Download All <i class="fas fa-download"></i></label>
            <div class="download-section">
                <ul>
                    <li><a class="btn border-warning border-rounded" href="exporter/exporting_CSV.php">CSV</a></li>
                    <li><a class="btn border-warning border-rounded" href="exporter/exporting_EXCEL.php">EXCEL</a></li>
                    <li><a class="btn border-warning border-rounded" href="exporter/exporting_XML.php">XML</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--Footer section-->
    <footer id="footer" style="display:none;">
        <div class="footercontainer">
            <div class="socialicons">
                <a href="" target="_blank"><i class="fa-brands fa-facebook fa-3x" style="color: #2b63c5;"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-instagram fa-3x" style="color: #fb3958"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-twitter fa-3x" style="color: blue"></i></a>
                <a href="" target="_blank"><i class="fa-brands fa-youtube fa-3x" style="color: #fb3958"></i></a>
            </div>
            <div class="footernav">
                <ul>
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#performance" class="nav-link">Performance</a></li>
                    <li><a href="about.php" class="nav-link">About Us</a></li>
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    ="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="js/navbar.js"></script> -->
    <!-- <script>
        var firstChild = document.getElementById('list1');
        var secondChild = document.getElementById('list2');

        console.log('SELECTED');
        setTimeout(function(){
            secondChild.classList.add('active');
            firstChild.classList.remove('active');
            document.getElementById('performance').style.display='block';
            document.getElementById('footer').style.display='block';
            document.getElementById('home').style.display='none';
        }, 5000);
    </script> -->

    <!-- <script>
        const websocket = new WebSocket('ws://localhost:8080'); // Adjust the URL and port

        websocket.onopen = (event) => {
            console.log('Websocket connection established.');
        };

        websocket.onmessage = (event) => {
            const data = JSON.parse(event.data);
            // Update your graphs with the received data.
            // Example: updateSolarVoltageGraph(data.solar_voltage);
        };

        websocket.onclose = (event) => {
            console.log('Websocket connection closed.');
        };
    </script> -->
    <script>

        function pollForNewData(){

            // XHR REQ
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function(){
                if(xhr.readystate == 4 && xhr.state.status === 200){
                    //
                    
                    console.log(xhr.responseText)

                }
            }

            xhr.open("POST", "php/svdata.php", true);
            // xhr.open("POST", "php/scdata.php", true);
            // xhr.open("POST", "php/stdata.php", true);
            // xhr.open("POST", "php/lvdata.php", true);
            // xhr.open("POST", "php/lcdata.php", true);
            // xhr.open("POST", "php/socdata.php", true);

            xhr.send()
        } 

        function prepareforNewData(){

            pollForNewData();

            console.log('sssssssssssssssssss')


            setTimeout(prepareforNewData , 5000);

        }
        window.onload= function(){
        prepareforNewData()
               
        }
    </script>
</body>
</html>
