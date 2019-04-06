(function(){

  var tooltip = null;

  function createTooltip(title, options){

    var div = document.createElement("div");

    div.textContent = title;
    div.className = "tooltip hidden";

    document.body.appendChild(div);

    div.style.top = options.y + "px";
    div.style.left = (options.x + 0.5 * options.w - div.offsetWidth / 2)+ "px";

    tooltip = div;
  }

  function showTooltip(e){

    console.log(e);

    var title = e.target.getAttribute("title");

    createTooltip(title, {
      w: e.target.offsetWidth,
      x: e.target.offsetLeft,
      y: e.target.offsetTop
    });
  }

  function hideTooltip(){

    //tooltip.parentNode.removeChild(tooltip);

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
