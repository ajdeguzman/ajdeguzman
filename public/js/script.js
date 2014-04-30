$(document).ready(function() {
	var w = $(window).height();
	var divs = $('#about,#process,#blog,#contact,#portfolio');
	$(divs).height(screen.height - 100);   
});


  $(window).resize(function(){
    var w = $(window).height();
    var divs = $('#about,#process,#blog,#contact,#portfolio');
   $(divs).height(screen.height - 100);
  }); 