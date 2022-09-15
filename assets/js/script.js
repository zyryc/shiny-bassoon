$(document).ready(function() {
    // $(".image-input").fade();

console.log("born to be awsome");
var url  = window.location.href;
var getUrl = window.location;
var baseurl = getUrl.origin; 

    $(".mdc-drawer-link").each(function() {
        //Do your work 
        $(this).removeClass("active");

        var href = $(this).attr('href');
        if (href == url) {
            $(this).addClass("active");
        }
    })
    $(".nav-link").each(function() {
        //Do your work 
        $(this).removeClass("active");

        var href = $(this).attr('href');
        if (href == url) {
            $(this).addClass("active");
        }
    })
    // nav-link
// var href = $('a').attr('href');

if( $('thead').length )         // use this if you are using id to check
{
// $.noConflict();
  
    $('.table').DataTable();  
}

});
