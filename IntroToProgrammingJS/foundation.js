
/* / working code
window.onscroll = scroll;

function scroll () {
    
    var scrollTop = document.body.scrollTop;

    // if (scrollTop > 200) {
    //     console.log('greater then 100');

    // } else {
    //     console.log('less than 100');
    // }


    if (scrollTop > 50) {
        console.log('Greater than 50');
        $('.navbar-fixed-top').removeClass('opaque');
    } else {
        console.log('less than 50');
        $('.navbar-fixed-top').addClass('opaque');
    }

};
*/

$(window).scroll(function() {
    if($(this).scrollTop() > 50) {
        $('.navbar-fixed-top').removeClass('opaque');
    } else {
        $('.navbar-fixed-top').addClass('opaque');
        
    }
});

/*
var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
  if (scrollTop > 500) {
    if (!appended) {
      $('.navbar-fixed-top').removeClass('opaque');
      appended = true;
    }
  } else {
    if (appended) {
      $('.navbar-fixed-top').addClass('opaque');
      appended = false;
    }
  }

  */

