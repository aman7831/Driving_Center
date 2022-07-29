$(document).ready(function() {

  $(function(){
      $('#mixed-items').mixItUp();
  });

  new WOW().init();

  // DOM Content Load Event Actions;
  $( window ).load(function() {
    $('div#loading').remove();
    $('body').removeClass('loading');
  });

     $('.menu').onePageNav({
         currentClass: 'active',
         changeHash: true,
         scrollSpeed: 1200,
         top : 0
    });

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    }); 

});

$(document).ready(function(){
    // hide #back-top first
    $("#back-top").hide();            
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
});

$(document).ready(function() {
  $("#owl-demo").owlCarousel({
      navigation : true,
      slideSpeed : 600,
      paginationSpeed : 500,
      singleItem : true,
      autoPlay:true,
      stopOnHover : true,
      navigationText : ["",""],
      transitionStyle : "fade",
    });
   $("#owl-demo1").owlCarousel({
      navigation : true,
      navigationText : ["",""],
      autoPlay: 3000,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      stopOnHover : true,
      autoHeight: true,
    });
    $("#owl-demo2").owlCarousel({
      navigation : true,
      navigationText : ["",""],
      autoPlay: 3000,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      stopOnHover : true,
      autoHeight: true,
    });
    $("#owl-demo3").owlCarousel({
      navigation : true,
      navigationText : ["",""],
      autoPlay: 3000,
      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      stopOnHover : true,
      autoHeight: true,
    });
});

$(document).ready(function(){
  $(".fancybox").fancybox();
});


$(document).ready(function(){
  $(".menulink").click(function(){
    $(".summenu").toggle();
  })
});

jQuery(document).ready(function(){
  jQuery("#gallery").unitegallery({
    grid_space_between_cols:5,
    grid_space_between_rows:5,
    tile_enable_border:false,
    tile_enable_shadow:false,
    grid_padding:0,
    tile_width:250,
    tile_height:200,
    grid_num_rows:20,
  });
  jQuery("#gallery1").unitegallery({
    grid_space_between_cols:5,
    grid_space_between_rows:5,
    tile_enable_border:false,
    tile_enable_shadow:false,
    grid_padding:0,
    tile_width:250,
    tile_height:200,
    grid_num_rows:20,
  });
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$(document).ready(function(){
  $('input[name="inputamount"]').change(function() {
      $('input[name="amount"]').val($(this).val());
  });
});

// When home page load popup this message
$(function() {  $("#popModal").modal('show'); });


// Side Bar Menu
$(".menu_icon").click(function(){
    $(".menu_icon").toggleClass("active");
});
$(".menu_icon").click(function(){
    $(".sidebar").toggleClass("active");
});
$(".menu_icon").click(function(){
    $(".mobile_menu").toggleClass("active");
});

// Side Bar Dropdown Menu
jQuery('.accordion .open').children('.accordion_content').slideDown();
jQuery('.accordion_headline').on('click', function(){
    var $this = jQuery(this),
        $li = $this.closest('li'),
        $open = $this.closest('.accordion').find('li.open').not($li);

    //Close open accordions
    $open.children('.accordion_content').slideUp();
    $open.removeClass('open');
 
    //Open selected accordion
    $li.toggleClass('open');
    $this.next('.accordion_content').slideToggle();
});

// Desktop Dropdown Menu
$(".dropdown_menu_toggle").click(function(){
    $(".dropdown_menus").slideToggle("slow");
});

// Modern Social Media Icon Display
$(".share_icon").mouseover(function(){
    $(".social_icon").addClass("active");
});
$(".share_icon").mouseout(function(){
    $(".social_icon").removeClass("active");
});

// Home Page Toggle
$(function(){
  $(".mycustomCollapseTitle").click(function(){
    $(this).toggleClass("open");
    if($(this).hasClass("open"))
      $(".mycustomCollapseTitle").not(this).removeClass("open");
  });
});


// ****************** Coupons Section ****************** //
  function myFunction() {
      location.reload();
  }
  function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
  }
  $(document).ready(function(){
      $(".printthis2").hide();
      $(".printthis1").click(function(){
          $(".printthis1").hide();
          $(".printthis2").show();                    
      });
  });



//about-block-hover

    (function() {
      var tiltSettings = [
      {},
      {
        movement: {
          imgWrapper : {
            translation : {x: 10, y: 10, z: 30},
            rotation : {x: 0, y: -10, z: 0},
            reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
          },
          lines : {
            translation : {x: 10, y: 10, z: [0,70]},
            rotation : {x: 0, y: 0, z: -2},
            reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
          },
          caption : {
            rotation : {x: 0, y: 0, z: 2},
            reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
          },
          overlay : {
            translation : {x: 10, y: -10, z: 0},
            rotation : {x: 0, y: 0, z: 2},
            reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
          },
          shine : {
            translation : {x: 100, y: 100, z: 0},
            reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
          }
        }
      },
      {
        movement: {
          imgWrapper : {
            rotation : {x: -5, y: 10, z: 0},
            reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
          },
          caption : {
            translation : {x: 30, y: 30, z: [0,40]},
            rotation : {x: [0,15], y: 0, z: 0},
            reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
          },
          overlay : {
            translation : {x: 10, y: 10, z: [0,20]},
            reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
          },
          shine : {
            translation : {x: 100, y: 100, z: 0},
            reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
          }
        }
      },
      {
        movement: {
          imgWrapper : {
            rotation : {x: -5, y: 10, z: 0},
            reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
          },
          caption : {
            translation : {x: 20, y: 20, z: 0},
            reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
          },
          overlay : {
            translation : {x: 5, y: -5, z: 0},
            rotation : {x: 0, y: 0, z: 6},
            reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
          },
          shine : {
            translation : {x: 50, y: 50, z: 0},
            reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
          }
        }
      },
      {
        movement: {
          imgWrapper : {
            translation : {x: 0, y: -8, z: 0},
            rotation : {x: 3, y: 3, z: 0},
            reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
          },
          lines : {
            translation : {x: 15, y: 15, z: [0,15]},
            reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
          },
          overlay : {
            translation : {x: 0, y: 8, z: 0},
            reverseAnimation : {duration : 600, easing : 'easeOutExpo'}
          },
          caption : {
            translation : {x: 10, y: -15, z: 0},
            reverseAnimation : {duration : 900, easing : 'easeOutExpo'}
          },
          shine : {
            translation : {x: 50, y: 50, z: 0},
            reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
          }
        }
      },
      {
        movement: {
          lines : {
            translation : {x: -5, y: 5, z: 0},
            reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
          },
          caption : {
            translation : {x: 15, y: 15, z: 0},
            rotation : {x: 0, y: 0, z: 3},
            reverseAnimation : {duration : 1500, easing : 'easeOutElastic', elasticity : 700}
          },
          overlay : {
            translation : {x: 15, y: -15, z: 0},
            reverseAnimation : {duration : 500,easing : 'easeOutExpo'}
          },
          shine : {
            translation : {x: 50, y: 50, z: 0},
            reverseAnimation : {duration : 500, easing : 'easeOutExpo'}
          }
        }
      },
      {
        movement: {
          imgWrapper : {
            translation : {x: 5, y: 5, z: 0},
            reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
          },
          caption : {
            translation : {x: 10, y: 10, z: [0,50]},
            reverseAnimation : {duration : 1000, easing : 'easeOutQuart'}
          },
          shine : {
            translation : {x: 50, y: 50, z: 0},
            reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
          }
        }
      },
      {
        movement: {
          lines : {
            translation : {x: 40, y: 40, z: 0},
            reverseAnimation : {duration : 1500, easing : 'easeOutElastic'}
          },
          caption : {
            translation : {x: 20, y: 20, z: 0},
            rotation : {x: 0, y: 0, z: -5},
            reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
          },
          overlay : {
            translation : {x: -30, y: -30, z: 0},
            rotation : {x: 0, y: 0, z: 3},
            reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
          },
          shine : {
            translation : {x: 100, y: 100, z: 0},
            reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
          }
        }
      }];

      function init() {
        var idx = 0;
        [].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos) { 
          idx = pos%2 === 0 ? idx+1 : idx;
          new TiltFx(el, tiltSettings[idx-1]);
        });
      }

      // Preload all images.
      imagesLoaded(document.querySelector('main'), function() {
        document.body.classList.remove('loading');
        init();
      });

      // REMOVE THIS!
      // For Demo purposes only. Prevent the click event.
      [].slice.call(document.querySelectorAll('a[href="#"]')).forEach(function(el) {
        el.addEventListener('click', function(ev) { ev.preventDefault(); });
      });

      var pater = document.querySelector('.pater'),
        paterSVG = pater.querySelector('.pater__svg'),
        pathEl = paterSVG.querySelector('path'),
        paths = {default: pathEl.getAttribute('d'), active: paterSVG.getAttribute('data-path-hover')};

      pater.addEventListener('mouseenter', function() {
        anime.remove(pathEl);
        anime({
          targets: pathEl,
          d: paths.active,
          duration: 400,
          easing: 'easeOutQuad'
        });
      });

      pater.addEventListener('mouseleave', function() {
        anime.remove(pathEl);
        anime({
          targets: pathEl,
          d: paths.default,
          duration: 400,
          easing: 'easeOutExpo'
        });
      });
    })();
