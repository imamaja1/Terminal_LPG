 $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(500).fadeOut(400); // will fade out the white DIV that covers the website.
        })