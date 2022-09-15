$(document).ready(function() {
    // $(".image-input").fade();

    // $("#item").removeClass();
    $(".btn").each(function() {
        $(this).removeAttr('class').attr('class', '');
        $(this).addClass("btn btn-outline-dark btn-sm");
    });
    $(".mbc-btn").each(function() {
        $(this).removeAttr('class').attr('class', '');
        $(this).addClass("btn btn-outline-dark btn-sm");
    });
    $(".filled-button--success").each(function() {
        $(this).removeAttr('class').attr('class', '');
        $(this).addClass("btn btn-outline-dark btn-sm");
        // $(this).addClass("mdc-button--raised");
    });
        $(".btns").each(function() {
        $(this).removeAttr('class').attr('class', '');
        $(this).addClass("btn btn-outline-dark btn-sm");
        // $(this).addClass("mdc-button--raised");
    });
// mdc-button
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
        console.log(url);
        var splits = url.split('/')
        var splithref = href.split('/')
        // console.log(getUrl);

        if (splithref[4]==splits[4] && splithref[5]==splits[5]) {
            // console.log("true")
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
