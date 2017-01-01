
/* / working code */
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
