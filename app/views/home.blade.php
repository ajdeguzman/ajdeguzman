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
          <nav class="navbar navbar-default navbar-fixed-top m-nav"  id = "top" role="navigation">
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
                     <li><a href="#blog"  data-scroll="" data-options="easing: easeInQuint; speed: 800;" >BLOG</a></li>
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
              <img style = "display:inline-block;position:relative;" src="images/taylor.jpg" width = "200" class="img-circle m-about-image">
            <div class = "m-about-desc animated fadeInUp" style = "position:relative;display:inline-block;top: 40px;padding-left:2em">
              <span class = "m-about-title">Hi, I'm Taylor.</span><br>
              <span class = "m-about-sub-title">I'm a Mobile + Web Developer.</span>
            </div>
        </aside>
          <br><br>
        <aside style = "position:absolute;bottom:10px;font-size:30px;left:50%;" class = "anim bounce">
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
                          <div><img src="images/processes/plan.png" width = "200" data-wow-delay="0.2s" class="wow delay-1 img-circle scale-in-anim img-responsive" ></div>
                          <div><h2 data-wow-delay="0.2s" class = "wow delay-1 fadeInUp">Plan</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/design.png" data-wow-delay="0.4s" width = "200" class="wow delay-2 img-circle scale-in-anim img-responsive"></div>
                          <div><h2 data-wow-delay="0.4s" class = "wow delay-2 fadeInUp">Design</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/develop.png"data-wow-delay="0.6s" width = "200" class="wow delay-3 img-circle scale-in-anim img-responsive"></div>
                          <div><h2 data-wow-delay="0.6s" class = "wow delay-3 fadeInUp">Develop</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/test.png"data-wow-delay="0.8s" width = "200" class="wow delay-4 img-circle scale-in-anim img-responsive"></div>
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
        <div>
            <div align = "center">
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
                                  <textarea placeholder = "Message" class="form-control m-frm-textarea col-md-5 " rows="3" rows="5" cols="3" name="sender_message"></textarea>
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
                <li><a target = "_blank" href="https://twitter.com/myajdeguzman"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a target = "_blank"  href="http://github.com/aljanix"><i class="fa fa-github fa-lg"></i></a></li>
                <li><a target = "_blank"  href="http://facebook.com/aljohnix"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a target = "_blank"  href="http://plus.google.com/+aljohndeguzman"><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a target = "_blank"  href="http://ph.linkedin.com/pub/aljohn-de-guzman/57/b82/4b5/"><i class="fa fa-linkedin fa-lg"></i></li>
              </ul>
            </div>
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        smoothScroll.init();
        new WOW().init();
    </script>
  </body>
</html>
