jQuery( document ).ready( function( $ ){
  
    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function(){ 
      if (jQuery(this).scrollTop() > 100) {
        jQuery('.scroll-to-top').fadeIn();
      } else {
        jQuery('.scroll-to-top').fadeOut();  
      }
    });

    //Click event to scroll to top
    jQuery('.scroll-to-top').click(function(){
      jQuery('html, body').animate({scrollTop : 0},800);
      return false;
    });

  $( '.flexslider' ).flexslider( {
    animation: "slide",
    controlNav: true
  } );

  $( '.tabs-container' ).tabs();

  /* Get the window's width, and check whether it is narrower than 480 pixels */
  var windowWidth = $( window ).width();

  if ( windowWidth <= 600 ) {

    /* Clone our navigation */
    var mainNavigation = $( '.primary-menu' ).clone();

    /* Replace unordered list with a "select" element to be populated with options, and create a variable to select our new empty option menu */
    $( '.primary-menu' ).html( '<select class="menu"></select>' );
    var selectMenu = $( 'select.menu' );

    /* Navigate our nav clone for information needed to populate options */
    $( mainNavigation ).children( 'ul' ).children( 'li' ).each( function() {

    /* Get top-level link and text */
    var href = $( this ).children( 'a' ).attr( 'href' );
    var text = $( this ).children( 'a' ).text();

    /* Append this option to our "select" */
    $( selectMenu ).append( '<option value="'+href+'">'+text+'</option>' );

      /* Check for "children" and navigate for more options if they exist */
      if ( $( this ).children( 'ul' ).length > 0) {
        $( this ).children( 'ul' ).children( 'li' ).each( function() {

          /* Get child-level link and text */
          var href2 = $( this ).children( 'a' ).attr( 'href' );
          var text2 = $( this ).children( 'a' ).text();

          /* Append this option to our "select" */
          $( selectMenu ).append( '<option value="'+href2+'">--- '+text2+'</option>' );
        });
      }

    });
  }

  /* When our select menu is changed, change the window location to match the value of the selected option. */
  $( selectMenu ).change( function() {
    location = this.options[this.selectedIndex].value;
  });

});

