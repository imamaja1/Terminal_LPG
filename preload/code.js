 $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(300).fadeOut(200); // will fade out the white DIV that covers the website.
        })