equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

  	$(window).load(function(){
      var headerHeightMobile = $(".site-header-main").height();
      var bannerHeight = $(".banner-image").height();
      var Headheight = document.getElementById("header").offsetHeight;
      var homeItemHeight = $(".home-image").height();
      var headerHeight2 = $(".site-header-main").height();

      equalheight('.event-item');

      $('#mobile-menu .menu').slicknav({
        label: '',
        prependTo: '#mobile-menu-location',
        duration: '1000',
        label: 'Menu',
      });

      $(".home-item").corner("bite 30px");

      $("#mobile-menu-location").height(headerHeightMobile);

      if ($(window).width() < 700) {
        var bannerHeight = $(".banner-image").height();
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() > 700) {
        $(".home-content").height(homeItemHeight);
        $(".main-banner").height(bannerHeight);
      }



      $(".slicknav_btn").height(headerHeightMobile);

  	});

		$(window).resize(function(){
      var headerHeightMobile = $(".mobile-logo").height();
      var bannerHeight = $(".banner-image").height();
      var Headheight = document.getElementById("header").offsetHeight;
      var homeItemHeight = $(".home-image").height();
      var headerHeight2 = $(".site-header-main").height();

      equalheight('.event-item');

      $(".slicknav_btn").height(headerHeight2);

      if ($(window).width() < 700) {
        $(".home-content").height('auto');
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() > 700) {

            $(".home-content").height(homeItemHeight);
            $(".main-banner").height(bannerHeight);
      }



		});
