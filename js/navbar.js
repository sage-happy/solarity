  // JavaScript
  const homelink = document.getElementById('nav-link1');
  const performancelink = document.getElementById('nav-link2');
  const home = document.getElementById('home');
  const performance = document.getElementById('performance');

    performancelink.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
      const targetSectionId = performancelink.getAttribute('id'); // Get the target section ID
        if (performancelink.id === targetSectionId) {
            performance.style.display = 'block'; // Display the target section
            performancelink.classList.add('active');
            home.style.display = 'none';
            homelink.classList.remove('active');;
        }
      });

      homelink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        const targetSectionId = homelink.getAttribute('id'); // Get the target section ID
          if (homelink.id === targetSectionId) {
            performance.style.display = 'none'; // Display the target section
            homelink.classList.add('active');
            home.style.display = 'block';
            performancelink.classList.remove('active');
          } 
        });