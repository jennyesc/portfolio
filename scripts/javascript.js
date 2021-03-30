//Accordion menu - single project page
const $tabs = $('.tab');
const $content = $('.content');

$content.hide();

$tabs.click(function(){
   
    if($(this).next().is(':visible')){
        $(this).next().slideUp();
        $(this).children('.plus-minus').removeClass('close');
        
    } else{
        $content.slideUp();
        $content.prev().children('.plus-minus').removeClass('close');
        $(this).next().slideDown();
        $(this).children('.plus-minus').addClass('close');
    }
});

//Scroll to Top button
/* //Get the button */
var mybutton = document.getElementById("myBtn");

// When the user scrolls down ** px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 950 || document.documentElement.scrollTop > 950) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}