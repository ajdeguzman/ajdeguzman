$(document).ready(function() {


    //Up Button

        $('#tops').hide();
        $(window).scroll(function(){
            if($(window).scrollTop() >= 900)
            {
                $('#m-nav').addClass('navbar-fixed-top');
                $('#tops').fadeIn(500);
            }
            else
            {
                $('#m-nav').removeClass('navbar-fixed-top');
                $('#tops').fadeOut(500);
            }
        });

	//Google Map API

    function initialize() 
{        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(14.566145, 121.072341),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
});
/*
  $(window).resize(function(){
    var w = $(window).height();
    var divs = $('#about,#process,#blog,#contact,#portfolio');
   $(divs).height(screen.height - 100);
  }); */