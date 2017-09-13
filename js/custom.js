// $('#for').on('click', function (){
//   var ScrollWidth = $('.img.make-it-fit').width();
//     //debug for scrollWidth 
//     console.log('on click function called for Foward Button', ScrollWidth);
//     $( "div" ).animate({
//       right: "+=500px",
//       }, 5000, function() {
//         // Animation complete.
//       });
//     }); 
    
/*$('#backward').on('click', function (){
$( "img.make-it-fit" ).animate({
   left: "+=500px",
  }, 5000, function() {
    // Animation complete.
  });
});
\*

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "150px";
    document.getElementById("main").style.marginLeft = "150px";
    document.body.style.backgroundColor = "rgba(255,255,255,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}
