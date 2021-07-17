// Loading Overlay
$(window).on('load', function() {
    $(".overlay-load").fadeOut(2000);
    $("main").fadeIn(3000);
    $("#banner h1").fadeIn(5000);
});

// AOS
AOS.init();

// Hamburger Menu
var tombol = document.querySelector('#menu');
var menu = document.querySelector('#menu-content');

tombol.addEventListener('click', () =>{
    menu.classList.toggle('show');
    tombol.classList.toggle('show');
});

// Venebox
$(document).ready(function(){
    $('.venobox').venobox();});


// Gallery Youtube
$(".item-podcast").click(function(){
    let youtube_id= $(this).children("img").attr("data-id");
    console.log(youtube_id);
    $(this).children(".youtube-icon")
      .addClass("active").parent()
      .siblings()
      .children(".youtube-icon")
      .removeClass("active")
    let newUrl = youtube_id;
    $("#video_id").attr("src", newUrl);
});




