
// set variable colors
// var bgColor = "#444";
// var textColor = "#FF9933";
// store div id myDiv in a variable
// var myDiv = document.getElementById('myDiv');
// assign color to div
// myDiv.style.background = bgColor;
// myDiv.style.color = textColor;

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
      document.body.appendChild(bookmark);
      appended = true;
    }
  } else {
    if (appended) {
      document.body.removeChild(bookmark);
      appended = false;
    }
  }

  */

