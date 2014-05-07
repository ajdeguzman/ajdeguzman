<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" media="(min-width: 1200px)" href="css/media-large.css" />
    <link rel="stylesheet" media="(min-width: 768px) and (max-width: 979px)" href="css/media-tablet.css" />
    <link rel="stylesheet" media="(max-width: 767px)" href="css/media-tablet.css" />
    <link rel="stylesheet" media="(max-width: 480px)" href="css/media-phone.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <lnk href="css/font-awesome-animation.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".navbar">
      <div>
          <nav id = "m-nav" class="navbar-default m-nav"  id = "top" role="navigation">
                 <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <div class = "m-div-logo" >
                    <a title = "ajdeguzman" href="#">
                      <img src="images/logo.png" height = "50px" width = "50px">
                    </a>
                  </div>
                </div>
            <nav class="collapse navbar-collapse" role = "navigation" id="my-navbar-collapse">
              <div class = "navbar-inner" >
                   <ul class="nav navbar-nav navbar-right">
                     <li class = "active"><a href="#about"  data-scroll="" data-options="easing: easeInQuint; speed: 800;">ABOUT</a></li>
                     <li><a  class = "faa-wrench animated-hover" href="#blog"  data-scroll="" data-options="easing: easeInQuint; speed: 800;" >BLOG</a></li>
                     <li><a href="#portfolio"  data-scroll="" data-options="easing: easeInQuint; speed: 800;" >PORTFOLIO</a></li>
                     <li><a href="#contact"  data-scroll="" data-options="easing: easeInQuint; speed: 800;">CONTACT</a></li>
                   </ul>
              </div>
            </nav>
        </nav>
    </div>
    <section id = "about" style = "padding-top: 200px">
      <div class = "m-section-about container">
        <aside style = "position:absolute;display:block;left:50%;margin-left: -319px;">            
              <img style = "display:inline-block;position:relative;" src="images/conan.png" width = "200" class="img-circle m-about-image">
            <div class = "m-about-desc" style = "position:relative;display:inline-block;top: 40px;padding-left:2em">
              <span  data-wow-delay="0.2s" class = "wow delay-1 m-about-title fadeInUp">Hi, I'm Conan.</span><br>
              <span  data-wow-delay="0.4s" class = "wow delay-2 m-about-sub-title flipInY">I'm a Mobile + Web Developer.</span>
            </div>
        </aside>
          <br><br>
        <aside style = "position:absolute;bottom:50px;font-size:30px;left:50%;" class = "m-arrow-down anim bounce">
            <a href="#blog"  data-scroll="" data-options="easing: easeInOutQuad"><i class="fa fa-angle-down fa-lg"></i></a>
        </aside>
      </div>
    </section>
    <section id = "process">
     <div>
        <h1>PROJECT WORKFLOW</h1>
        <br><br>
        <div style = "display:block">
                   <div class = "row" align = "center">
                      <div class="col-md-3">
                          <div><img src="images/processes/plan.png" width = "200" data-wow-delay="0.2s" class="wow delay-1 scale-in-anim img-responsive" ></div>
                          <div><h2 data-wow-delay="0.2s" class = "wow delay-1 fadeInUp">Plan</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/design.png" data-wow-delay="0.4s" width = "200" class="wow delay-2 scale-in-anim img-responsive"></div>
                          <div><h2 data-wow-delay="0.4s" class = "wow delay-2 fadeInUp">Design</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/develop.png"data-wow-delay="0.6s" width = "200" class="wow delay-3 scale-in-anim img-responsive"></div>
                          <div><h2 data-wow-delay="0.6s" class = "wow delay-3 fadeInUp">Develop</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/test.png"data-wow-delay="0.8s" width = "200" class="wow delay-4 scale-in-anim img-responsive"></div>
                         <div><h2 data-wow-delay="0.8s" class = "wow delay-4 fadeInUp">Test</h2></div>
                      </div>
                  </div>
        </div>
      </div>
    </section>
    <section id = "blog">
      <div class = "container">
        <h1>BLOG</h1>
        <br><br>
          <div class = "container">
                   <div class = "row" align = "center">
                      <div class=" m-col-blog col-lg-4 col-sm-4 col-6 img-responsive">
                         <div class = "thumbnail">
                            <a href="#" class="wow delay-4 scale-in-anim">
                              <img src="http://placehold.it/350x200/FDD04E/FFF" class = "img-responsive">
                            </a>
                            <p class = "subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>  
                         </div>
                      </div>
                     <div class=" m-col-blog col-lg-4 col-sm-4 col-6 img-responsive">
                         <div class = "thumbnail">
                            <a href="#" class="wow delay-4 scale-in-anim">
                              <img src="http://placehold.it/350x200/449955/FFF" class = "img-responsive" class = "img-responsive">
                            </a>
                            <p class = "subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>  
                         </div>
                      </div>
                      <div class=" m-col-blog col-lg-4 col-sm-4 col-6 img-responsive">
                         <div class = "thumbnail">
                            <a href="#" class="wow delay-4 scale-in-anim">
                              <img src="http://placehold.it/350x200/1277CF/FFF" class = "img-responsive">
                            </a>
                            <p class = "subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>  
                         </div>
                      </div>
                  </div>
                      <a href="#" class="btn btn-large">MORE ARTICLES</a>
             </div>
        </div>
      </div>
    </section>
    <section id = "portfolio">
      <div class = "container">
        <h1>RECENT WORK</h1>
        <br><br>
        <div>
            <div align = "center">
             </div>
        </div>
      </div>
    </section>
    <section id = "contact">
      <div class = "container form-group">
        <h1>GET IN TOUCH</h1>
        <h2>Feel free to send me a message if you have any question.</h2>
        <h2> I'd love to hear from you.</h2>
        <br><br>
        <div>
            <div align = "center">
                <form role="form" method="post" action=""> 
                    <div class="row">
                          <label class = "col-md-2"></label>
                              <div>
                                  <input type="text" placeholder = "Name" class="form-control m-frm-textinput col-md-5" name="sender_name" id="sender_name" value="">
                              </div>
                    </div><br>
                    <div class="row">
                          <label class = "col-md-2"></label>
                              <div>
                                  <input type="email" placeholder = "Email" class="form-control m-frm-textinput col-md-5" name="sender_name" id="sender_name" value="">
                              </div>
                    </div><br>
                    <div class="row">
                          <label class = "col-md-2"></label>
                              <div>
                                  <textarea placeholder = "Message" data-rule = "required" class="form-control m-frm-textarea col-md-5 " rows="3" rows="5" cols="3" name="sender_message"></textarea>
                              </div>
                    </div><br>
                    <div>
                          <input type="submit" id = "btn_submit" class="btn btn-large" value="SEND MESSAGE">
                    </div><br> 
                </form>
              </div>
        </div>
      </div>
    </section>
    <section>
      <div class = "container">
        <div class = "row">

        </div>
      </div>
      <div class = "container" id="map_canvas">
      </div>
    </section>
    <nav class="m-footer">
        <div class = "container">
            <div class = "m-footer-block">
              <img src="images/logo.png" height = "44px">
            </div>
            <div class = "m-footer-block">
              <span>ALL RIGHTS RESERVED. ALJOHN DE GUZMAN 2014.</span>
            </div>
            <div class = "m-footer-block">
              <ul class="list-inline" style = "float:right">
                <li><a class = "m-social-links" target = "_blank" href="https://twitter.com/myajdeguzman"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a class = "m-social-links" target = "_blank"  href="http://github.com/aljanix"><i class="fa fa-github fa-lg"></i></a></li>
                <li><a class = "m-social-links" target = "_blank"  href="http://facebook.com/aljohnix"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a class = "m-social-links" target = "_blank"  href="http://plus.google.com/+aljohndeguzman"><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a class = "m-social-links" target = "_blank"  href="http://ph.linkedin.com/pub/aljohn-de-guzman/57/b82/4b5/"><i class="fa fa-linkedin fa-lg"></i></li>
              </ul>
            </div>
        </div>
    </nav>
    <div id="tops" style="display: block;">
      <a  href="#about"  data-scroll="" data-options="easing: easeInOutQuad" title="Back to the top">
          <i class="fa fa-angle-up fa-lg"></i>
      </a>
    </div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        smoothScroll.init();
        new WOW().init();
        $('#tops').hide();
    </script>
  </body>
</html>
