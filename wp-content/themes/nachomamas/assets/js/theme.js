  	$(document).ready(function(){
      var headerHeightMobile = $(".site-header-main").height();
      var bannerHeight = $(".banner-image").height();
      var Headheight = document.getElementById("header").offsetHeight;
      var homeItemHeight = $(".home-image").height();
      var headerHeight2 = $(".site-header-main").height();

      $('#mobile-menu .menu').slicknav({
        label: '',
        prependTo: '#mobile-menu-location',
        duration: '1000',
        label: 'Menu',
      });

      $("#mobile-menu-location").height(headerHeightMobile);

      if ($(window).width() < 700) {
        var bannerHeight = $(".banner-image").height();
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() > 700) {
        document.getElementById("banner-overlay").style.paddingTop = Headheight + 'px';
        document.getElementById("banner-overlay").style.paddingBottom = Headheight + 'px';
        $(".home-content").height(homeItemHeight);
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() < 1122) {
          document.getElementById("banner-overlay").style.paddingBottom =  '0px';
      }

      $(".slicknav_btn").height(headerHeightMobile);

  	});

		$(window).resize(function(){
      var headerHeightMobile = $(".mobile-logo").height();
      var bannerHeight = $(".banner-image").height();
      var Headheight = document.getElementById("header").offsetHeight;
      var homeItemHeight = $(".home-image").height();
      var headerHeight2 = $(".site-header-main").height();

      $(".slicknav_btn").height(headerHeight2);

      if ($(window).width() < 700) {
        $(".home-content").height('auto');
        $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() > 700) {
          document.getElementById("banner-overlay").style.paddingTop = Headheight + 'px';
          document.getElementById("banner-overlay").style.paddingBottom = Headheight + 'px';
            $(".home-content").height(homeItemHeight);
            $(".main-banner").height(bannerHeight);
      }

      if ($(window).width() < 1122) {
          document.getElementById("banner-overlay").style.paddingBottom =  '0px';
      }

		});
