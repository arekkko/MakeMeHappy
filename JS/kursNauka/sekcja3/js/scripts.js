(function(){

  function showTooltip(e){
    console.log(e.target);
  }

  function hideTooltip(){
    console.log("Chowam tooltip");
  }

  var title = document.querySelectorAll("[title]");

  var container = document.querySelector(".container");

  for( var i = 0; i < title.length; i++){
    title[i].addEventListener("mouseenter", showTooltip, false);
    title[i].addEventListener("mouseleave", hideTooltip, false);
  }
/*
  container.addEventListener("click", function(){

    console.log("Klik");

  }, false);
*/

})();
