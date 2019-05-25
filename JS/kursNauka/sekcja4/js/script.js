(function($){

var tabsNav = $(".menu-link"),
    tabsItems = $(".section-menu .sms"),
    activeClass = "active";

tabsNav.first().addClass(activeClass);
tabsItems.not(":first").hide();

tabsNav.on("click", function(){

  var tabNav = $(this),
      index = tabNav.index();

  tabsNav.removeClass(activeClass);
  tabNav.addClass(activeClass);

  tabsItems
    .hide("300s")
    .eq(index)
    .show("300s");

  console.log(index);
});

})(jQuery);
