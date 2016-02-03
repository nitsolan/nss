/*!
 * Spectrum v1.2.0 (http://themes.startbootstrap.com/spectrum-v1.2.0)
 * Copyright 2013-2015 Start Bootstrap Themes
 * To use this theme you must have a license purchased at WrapBootstrap (https://wrapbootstrap.com)
 */

// Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// create youtube player
var player;

function onYouTubePlayerAPIReady() {
    player = new YT.Player('player', {
        height: '720',
        width: '1280',
        videoId: 'vXmCrIoj3dg',
        playerVars: {rel: 0},
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

// autoplay video
function onPlayerReady(event) {
  //  event.target.playVideo();
}

// when video ends
function onPlayerStateChange(event) {
    if (event.data === 0) {
        player.stopVideo();
        document.getElementById('flipfront').className += ' hide';
        document.getElementById('flipback').className += ' show';
    }
}



 
// Functions to run on document ready
jQuery(document).ready(function() {

    // Find Mobile Devices
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    // Initialize Stellar.js Parallax
    if (!isMobile.any()) {
        $(window).stellar({
            horizontalScrolling: false,
            verticalOffset: 0,
            horizontalOffset: 0,
            hideDistantElements: false
        });
    }

    // Activates the Bootstrap Carousel for the Intro Header Options
    $('.carousel').carousel({
        interval: 6000,
        pause: "false",
    })

   // Activates FitVids jQuery Plugin
    $(".container").fitVids();

    // Activates Magnific Popup jQuery Plugin
    $('.gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
    });

    // Floating label Headings for the Contact Form
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });



$("#videoModal").on('hidden.bs.modal', function(e) {
    player.stopVideo();
    $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
    $("#flipfront").removeClass(" hide").addClass( "show" );
    $("#flipback").removeClass(" show");
});

$(function() {
      $("#gotofeedback").click( function()
           {
              $(".modal").modal("hide");
             $("#flipfront").removeClass(" hide").addClass( "show" );
             $("#flipback").removeClass(" show");
             $("#player").removeClass(" none"); // 
             $('html, body').animate({
               scrollTop: $("#feedback").offset().top
             }, 2000);

           }
      );
});




});

// Functions to run on window load
$(window).load(function() {

       $('#filters').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({
            filter: filterValue
        });
    });
    // change is-checked class on buttons
    $('#filters').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.active').removeClass('active');
            $(this).addClass('active');
        });
    });

 autoPlayYouTubeModal();

    //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
    function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-toggle="modal"]');
    }

});
