  // JavaScript
  const homelink = document.getElementById('nav-link1')
  const performancelink = document.getElementById('nav-link2')
    performancelink.addEventListener('click', function(event) {
      //event.preventDefault(); // Prevent default link behavior
        if (performancelink.id === 'performance') {
            window.location.href="landing.php#performance";
            const home = document.getElementById('home')
            const performance = document.getElementById('performance');
            home.style.display = 'none';
            performance.style.display = 'block'; // Display the target section
            performancelink.classList.add('active');
            
            homelink.classList.remove('active');;
        }
      });

      homelink.addEventListener('click', function(event) {
        //event.preventDefault(); // Prevent default link behavior
          if (homelink.id === 'home') {
            window.location.href="landing.php#home";
            const home = document.getElementById('home')
            const performance = document.getElementById('performance');
            performance.style.display = 'none'; // Hide the performance section
            home.classList.add('active');
            home.style.display = 'block';   // Display the home section
            homelink.classList.remove('active');
          } 
        });