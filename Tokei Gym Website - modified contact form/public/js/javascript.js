// Click to see menu

$('#handle').on('click', function() {

	$('nav ul').toggleClass('visible');

});



// Scroll To Top Button


// jQuery Scroll
            
jQuery(document).ready(function() {
  var offset = 50;
  var duration = 900;
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.scroll-to-top').fadeIn(duration);
    } else {
      jQuery('.scroll-to-top').fadeOut(duration);
    }
  });
  
  jQuery('.scroll-to-top').click(function(event) {
    event.preventDefault();
    jQuery('html, body').animate({scrollTop: 0}, duration);
    return false;
  })
});

// jQuery Scroll Ends




// Sticky Navigation

 


jQuery(document).ready(function() {

  if ( $(window).width() > 800) {      

    var navOffset = jQuery("nav").offset().top;

    jQuery("nav").wrap('<div class="nav-placeholder"></div>');

    jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

    jQuery(window).scroll(function() {

      var scrollPosition = jQuery(window).scrollTop();

      if(scrollPosition >= navOffset) {

        jQuery("nav").addClass("fixed");

      } else {

        jQuery("nav").removeClass("fixed");

      }

      // jQuery("#nav_logo").css({'opacity': .7*scrollVar });

      jQuery("#nav_logo").css({'opacity':( 0+(scrollPosition-150) )/310});

    });

  }

});





// Slider


$('.slider').each(function() {              // For every slider
  var $this   = $(this);                    // Current slider
  var $group  = $this.find('.slide-group'); // Get the slide-group (container)
  var $slides = $this.find('.slide');       // Create jQuery object to hold all slides
  var buttonArray  = [];                    // Create array to hold navigation buttons
  var currentIndex = 0;                     // Hold index number of the current slide
  var timeout;                              // Sets gap between auto-sliding

  function move(newIndex) {          // Creates the slide from old to new one
    var animateLeft, slideLeft;      // Declare variables

    advance();                       // When slide moves, call advance() again

    // If it is the current slide / animating do nothing
    if ($group.is(':animated') || currentIndex === newIndex) {  
      return;
    }

    buttonArray[currentIndex].removeClass('active'); // Remove class from item
    buttonArray[newIndex].addClass('active');        // Add class to new item

    if (newIndex > currentIndex) {   // If new item > current
      slideLeft = '100%';            // Sit the new slide to the right
      animateLeft = '-100%';         // Animate the current group to the left
    } else {                         // Otherwise
      slideLeft = '-100%';           // Sit the new slide to the left
      animateLeft = '100%';          // Animate the current group to the right
    }
    // Position new slide to left (if less) or right (if more) of current
    $slides.eq(newIndex).css( {left: slideLeft, display: 'block'} );

    $group.animate( {left: animateLeft}, function() {    // Animate slides and
      $slides.eq(currentIndex).css( {display: 'none'} ); // Hide previous slide      
      $slides.eq(newIndex).css( {left: 0} ); // Set position of the new item
      $group.css( {left: 0} );               // Set position of group of slides
      currentIndex = newIndex;               // Set currentIndex to the new image
    });
  }

  function advance() {                     // Used to set 
    clearTimeout(timeout);                 // Clear previous timeout
    timeout = setTimeout(function() {      // Set new timer
      if (currentIndex < ($slides.length - 1)) { // If slide < total slides
        move(currentIndex + 1);            // Move to next slide
      } else {                             // Otherwise
        move(0);                           // Move to the first slide
      }
    }, 4000);                              // Milliseconds timer will wait
  }

  $.each($slides, function(index) {
    // Create a button element for the button
    var $button = $('<button type="button" class="slide-btn">&bull;</button>');
    if (index === currentIndex) {    // If index is the current item
      $button.addClass('active');    // Add the active class
    }
    $button.on('click', function() { // Create event handler for the button
      move(index);                   // It calls the move() function
    }).appendTo('.slide-buttons');   // Add to the buttons holder
    buttonArray.push($button);       // Add it to the button array
  });

  advance();                          // Script is set up, advance() to move it


});



// Scroll to ID single page


$(document).ready(function(){
  $('nav a[href^="#"], #arr-down, #desktop_logo').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});

$('#labels_list a').on('click', function(e) {
    e.preventDefault();
})





// Hide membership_general_info when click on label


  $('a.label').on('click', function() {

      $('#membership_general_info').addClass('hide_membership_general_info');

  });


// Hide Bouncing arrow

document.getElementById('more').addEventListener('click', function() {
    document.getElementById('arrow-down').style.visibility = 'hidden';
});



