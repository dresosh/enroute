/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // Nav active state
        if ( $('body').hasClass('team') ) {
          $('.team_btn').addClass('active');
        } else if ( $('body').hasClass('clips') ) {
          $('.clips_btn').addClass('active');
        } else if ( $('body').hasClass('pics') ) {
          $('.pics_btn').addClass('active');
        } else if ( $('body').hasClass('blog') ) {
          $('.blog_btn').addClass('active');
        }

        // Testing
        if (screen.width < 420){
          $( 'nav' ).addClass( 'navbar-fixed-top' );
          $('section.container').css( 'margin-top', '5px' );
        }

        // JavaScript to be fired on all pages
        if ( $('nav').hasClass('navbar-fixed-top') ) {
          $('body').css( 'padding-top', '50px');
        }

        // Site transitions
        if ( $( 'section' ).hasClass( 'zoomIn') ) {
          $('nav a').on( 'click', function() {
            $('section').addClass('zoomOut');
            $('h1.animated').addClass('zoomOut');
          });
        } else if ( $( 'section' ).hasClass( 'fadeInUp' ) ) {
          $('nav a').on('click', function() {
            $('section').addClass('fadeOutDown');
            $('.heading').addClass('fadeOutRight');
          });
        }





      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        // Adds active class to first img in the list
        $('.item:first-child').addClass('active');


        var slide = $('.item');
        var list = '.carousel-indicators';
        for (var i = 0; i < slide.length; i++) {
          $( list ).append('<li class="slideBtn" data-target="#carousel-example-generic" data-slide-to="' + i + '" ></li>');
          $( '.slideBtn:first-child' ).addClass('active');
        }

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Home page
    'clips': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
