// var controller = new ScrollMagic.Controller();

// /** 
//  * dynamic-performance-banner
//  * 
// */
// var scene = new ScrollMagic.Scene({
//     triggerElement:'.screen1',
// })

// .setClassToggle('.screen1', 'active')
// .addTo(controller);


// var scene = new ScrollMagic.Scene({
//   triggerElement:'.screen2',
// })

// .setClassToggle('.screen2', 'hide')
// .addTo(controller);   



// var scene = new ScrollMagic.Scene({
//   triggerElement:'.screen3',
// })

// .setClassToggle('.screen3', 'hide')
// .addTo(controller);   



$(document).ready(function() {

  var scroll = 
  $(window).scroll(function(){
      if ($(this).scrollTop() > 50) {
         $('.screen1').addClass('hide');
      } else {
         $('.screen1').removeClass('hide');
      }


      if ($(this).scrollTop() > 100) {
        $('.screen2').addClass('active');
        
     } else {
        $('.screen2').removeClass('active');
     }

        if ($(this).scrollTop() > 200) {
          $('.screen3').addClass('active');
          


      } else {
          $('.screen3').removeClass('active');
      }


      if ($(this).scrollTop() > 400) {
        $('.screen4').addClass('active');
    } else {
        $('.screen4').removeClass('active');
    }


    if ($(this).scrollTop() > 600) {
      $('.screen5').addClass('active');
    } else {
      $('.screen5').removeClass('active');
    }


    if ($(this).scrollTop() > 900) {
      $('.screen6').addClass('active');
    } else {
      $('.screen6').removeClass('active');
    }

    
    if ($(this).scrollTop() > 1200) {
      $('.screen7').addClass('active');
    } else {
      $('.screen7').removeClass('active');
    }

    
    if ($(this).scrollTop() > 1700) {
      $('.screen8').addClass('active');
    } else {
      $('.screen8').removeClass('active');
    }

    
    if ($(this).scrollTop() > 3500) {
      $('.screen9').addClass('active');
    } else {
      $('.screen9').removeClass('active');
    }
  });
});