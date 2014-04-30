<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website</title>
    <!-- Bootstrap -->
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
        <nav id = "haha" class="navbar navbar-default navbar-fixed-top m-nav" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
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
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
              <div class = "navbar-inner" >
                   <ul class="nav navbar-nav animated slideInDown">
                     <li class = "active"><a href="#about"  data-scroll="" data-options="easing: easeInQuint; speed: 800;">About</a></li>
                     <li><a href="#blog"  data-scroll="" data-options="easing: easeInQuint; speed: 800;" >Blog</a></li>
                     <li><a href="#portfolio"  data-scroll="" data-options="easing: easeInQuint; speed: 800;" >Portfolio</a></li>
                     <li><a href="#contact"  data-scroll="" data-options="easing: easeInQuint; speed: 800;">Contact</a></li>
                   </ul>
              </div>
            </div>
        </nav>
    </div>
    <section id = "about" class = "m-sections" style = "padding-top: 200px">
      <div class = "m-section-about container" style = "text-align:center">
        <aside style = "position:absolute;display:block;left:50%;margin-left: -319px;">            
              <img style = "display:inline-block;position:relative;" src="images/taylor.jpg" width = "200" class="img-circle m-about-image">
            <div class = "animated fadeInUp" style = "text-align:left;position:relative;display: inline-block;top: 40px;padding-left:2em">
              <span class = "m-about-title">Hi, I'm Taylor.</span><br>
              <span class = "m-about-sub-title">I'm a Mobile + Web Developer.</span>
            </div>
        </aside>
          <br><br>
        <aside style = "position:absolute;bottom:10px;font-size:30px;left:50%;" class = "anim bounce">
            <a href="#blog"  data-scroll="" data-options="easing: easeInOutQuad" ><i class="fa fa-angle-down fa-lg"></i></a>
        </aside>
      </div>
    </section>
    <section id = "process"  class = "m-sections">
     <div class = "container">
        <h1>PROJECT WORKFLOW</h1>
        <br><br>
        <div style = "display:block">
                   <div class="row">
                      <div class="col-md-3">
                          <div><img src="images/processes/plan.png" width = "200" class="wow img-circle scale-in-anim"></div>
                          <div><h2 class = "wow fadeInUp">Plan</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/design.png" width = "200" class="wow img-circle scale-in-anim"></div>
                          <div><h2 class = "wow fadeInUp">Design</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/develop.png" width = "200" class="wow img-circle scale-in-anim"></div>
                          <div><h2 class = "wow fadeInUp">Develop</h2></div>
                      </div>
                      <div class="col-md-3">
                          <div><img src="images/processes/test.png" width = "200" class="wow img-circle scale-in-anim"></div>
                          <div><h2 class = "wow fadeInUp">Test</h2></div>
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
    <section id = "portfolio" class = "m-sections">
      <div class = "container">
        <h1>RECENT WORK</h1>
        <br><br>
        <div>
            <div align = "center">
             </div>
        </div>
      </div>
    </section>
    <section id = "contact" class = "m-sections">
      <div class = "container">
        <h1>GET IN TOUCH</h1>
        <h2>Feel free to send me a message if you have any question. I'd love to hear from you.</h2>
        <br><br>
        <div>
            <div align = "center">
                <form role="form" method="post" action=""> 
                    <div class="row">
                          <label class = "col-md-2"></label>
                              <div>
                                  <input type="text" placeholder = "Name" class="m-frm-textinput col-md-5" name="sender_name" id="sender_name" value="">
                              </div>
                    </div><br>
                    <div class="row">
                          <label class = "col-md-2"></label>
                              <div>
                                  <input type="email" placeholder = "Email" class="m-frm-textinput col-md-5" name="sender_name" id="sender_name" value="">
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
              <span>&copy; 2014 Aljohn De Guzman</span>
            </div>
            <div class = "m-footer-block">
              <ul class="list-inline">
                <li><a target = "_blank" href="https://twitter.com/myajdeguzman"><img width="25" src="images/social/twitter.png"></a></li>
                <li><a target = "_blank"  href="http://github.com/aljanix"><img width="25" src="images/social/github.png"></a></li>
                <li><a target = "_blank"  href="http://facebook.com/aljohnix"><img width="25" src="images/social/facebook.png"></a></li>
                <li><a target = "_blank"  href="http://ph.linkedin.com/pub/aljohn-de-guzman/57/b82/4b5/"><img width="25" src="images/social/linkedin.png"></a></li>
                <li><a target = "_blank"  href="http://plus.google.com/+aljohndeguzman"><img width="25px" src="images/social/google.png"></a></li>

              </ul>
            </div>
        </div>
      <div>

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
