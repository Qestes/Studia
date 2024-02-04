// Responsive navbar
$(".nav_icon").click(
function (){
  $(".navbar>div").slideToggle();
  if($(".nav_icon>div>span").text() == "+"){
    $(".nav_icon>div>span").text("-");

  }
  else{
    $(".nav_icon>div>span").text("+");
  }

});
