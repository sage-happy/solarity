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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <script src="Highcharts/code/highcharts.js"></script>
    <script src="Highcharts/code/modules/accessibility.js"></script>
    <!-- Include jQuery library -->
    <script>
    $(document).ready(function () {
        // Handle form submission
        $('#search-form').submit(function (e) {
            e.preventDefault(); // Prevent the form from submitting via the default method

            // Get the search query
            var searchQuery = $('#search-input').val();

            // Send an AJAX request to fetch data for the selected site
            $.ajax({
                type: 'POST',
                url: 'php/data.php', // Replace with the correct URL
                data: { search: searchQuery },
                dataType: 'json',
                success: function (jsonData) {
                    // Update the charts with the new data
                    updateCharts();

                    // Update the default value of $pid based on the search
                    var defaultPid = jsonData.site_id; // Assuming you return the site_id from data.php

                    // Optionally, update the site name or other relevant information
                    $('#site-name').html('<h2 style="text-align: center; font-weight: bold; text-decoration: underline">' + searchQuery + '</h2>');
                },
                error: function () {
                    alert('Error fetching data for the selected site.');
                }
            });
        });
    });
</script>

</head>
<body>
    <!-- <?php $_SESSION['email']."<br>".$_SESSION['password'];?> -->
    <div class="navbar">
        <span>
            <img id="logo-img" src="image/logo.jpg" alt="Logo"/>
            <p class="logo">SOLARITY</p>
        </span>
        <ul class="nav-links">
            <li id='list1'><a href="home.php" id="nav-link1">Home</a></li>
            <li class="active" id='list2'><a href="#" id="nav-link2">Performance</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <img src="image/menu.png" alt="" class="menu-btn">
    </div>

    <section class="content" id="performance">
        <div class="title">
          <h1>Performance</h1>
        <div class="line"></div>
      </div>
      <div class="toggle-button">
        <button class="btn btn-warning" id="toggleSectionBtn">Chart</button>
        <button class="btn btn-warning" id="tableBtn">Table</button>
      </div>
      <span id="search-bar" class="" style="float: right; padding-top: 50px; padding-bottom: 20px;">
          <form role="form" action="php/data.php" class="search-form" accept-charset="utf-8" method="post">
            <div class="btn-group d-flex justify-content-center ml-20px">
              <input class="search" type="text" name="search" placeholder=" Search" style=" width: 250px;">
              <input class="btn btn-primary" type="submit" value="Go">
            </div>
          </form>
        </span>
        <div class="d-flex justify-center p-3"id="site-name">
            <h2 style="text-align: center; font-weight: bold; text-decoration: underline">SITE A</h2>
        </div>
    <section id="chart-section">
        <div class="rendering-section">
            <div class="solar-section">
                <div class="image-div" id="svchart"></div>

                <div class="image-div" id="scchart"></div>

                <div class="image-div" id="stchart"></div>
            </div>
          
           <div class="load_section">
                <div class="image-div" id="lcchart"></div>
            
                <div class="image-div" id="lvchart"></div>
            </div>

          <div class="bat_soc">
                <div class="image-div" id="socchart"></div>
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
            <p id="download-link">Download All <i class="fas fa-download"></i></p>
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
    <footer id="footer">
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
            <p>Copyright &copy;2023; Designed by <p2 class="designer">Solarity</p2> </p>
        </div>
    </footer>
    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const navlinks = document.querySelector('.nav-links');

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')});
    </script>
    
    <script>
        var firstChild = document.getElementById('list1');
        var secondChild = document.getElementById('list2');

        setTimeout(function(){
            secondChild.classList.add('active');
            firstChild.classList.remove('active');
            document.getElementById('performance').style.display='block';
            document.getElementById('footer').style.display='block';
        }, 5000);
    </script>
    <script src="js/charts.js"></script>
    <?php ?>
</body>
</html>
