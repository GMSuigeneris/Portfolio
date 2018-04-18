@extends('layouts.master')
@section('contents')
    
  <!-- start section header -->
  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1 style="color:#000;">I&lsquo;m <span class="typed"></span></h1>
        <p style="color:#000;">Author, Developer, Chess Player</p>

        <ul class="list-unstyled list-social">
          <li><a href="#"><i style="color:#000;" class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i style="color:#000;" class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i style="color:#000;" class="ion-social-instagram"></i></a></li>
          <li><a href="#"><i style="color:#000;" class="ion-social-linkedin"></i></a></li>
          <li><a href="#"><i style="color:#000;" class="ion-social-tumblr"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End section header -->

  <!-- start section about me -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="images/suigeneris.jpg" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">
              <h2>SUIGENERIS</h2>
            <p>Banking and finance graduate, Developer and Author</p>
            <p>var frontEndDeveloper =['Html','Css','Bootstrap','Javascript','Angular5','Jquery']</p>
            <p>$BackEndDeveloper = ['Php','MySql','Laravel']</p>
            <p>const = ['Ajax','Restful Api','Wordpress']</p>
            <p>let MobileAppDeveloper = ['Cordova','Ionic3']</p>
            <a href="/about"><button class="btn btn-primary" style="color:fff;">Meet Me...</button></a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about me -->

 <!-- start section journal -->
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>Career As An Author</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">
              <a href="blog-single.html"><img src="images/quotes/excuse.png" class="img-responsive" alt="img"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">
              <a href="blog-single.html"><img src="images/quotes/choice.png" class="img-responsive" alt="img"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">
              <a href="blog-single.html"><img src="images/quotes/reflection.png" class="img-responsive" alt="img"></a>
            </div>
          </div>
       
        </div>
        <div class="row" style="padding-top:5px;">
          <div class="col-md-3 mx-auto">
              <a href="/author"><button class="btn btn-primary" style="color:fff;">View More...</button></a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End section journal -->

  <!-- start section about us -->
  <div id="about">
  <div class="container">
      <div class="section-title text-center">
        <h2>My First Publication</h2>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="images/frontpage.png" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

          <h3>ABOUT THE BOOK</h3> 
                <p>We today live in a world that could be likened to a perpetual marathon where batons of 
                different kinds and sizes are been handed off as quickly as they were received, 
                a world where participants have become apathetic to the notion of holding on to batons they are responsible for... 
                It&lsquo;s not a baton of victory but a baton of culpability and until we begin to own up to the baton(s) that belongs to us, 
                the individual and global changes we yearn for would continue to elude us. 
                Choices seek to address this anomaly at the core...from within an Individual to without.<br>
                Before we have the self awareness and moral consciousness to own up to global batons, we each need to own up to our life through the choices we make. The world is the way it is as a result of choices we each make and our lives are the way they are owing to our choices...
                Maybe not entirely but most significantly. Choices aims at awakening the human race to the peak of moral consciousness where we have the selflessness to do right by ourselves without compromising the individual standing next to us, 
                without compromising the universe at large and the world as we all know it would be better for it.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->

 

  <!-- start section journal -->
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>Portfolio</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/portfolio/one.png" class="img-responsive" alt="img"></a>

              <div class="journal-txt">
                <h4><a href="blog-single.html">A mini-school management system</a></h4>
                <p class="separator">Built with Laravel 5.6</p>
              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">
              <a href="blog-single.html"><img src="images/portfolio/two.png" class="img-responsive" alt="img"></a>
              <div class="journal-txt">
                <h4><a href="#blog-single.html">Task Manager</a></h4>
                <p class="separator">Built with Laravel 5.6</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">
              <a href="blog-single.html"><img src="images/portfolio/three.png" class="img-responsive" alt="img"></a>
              <div class="journal-txt">
                <h4><a href="blog-single.html">MyResume.apk</a></h4>
                <p class="separator">Built with Ionic3 and Angular5
                </p>
              </div>
            </div>
          </div>

        </div>

         <div class="row" style="padding-top:5px;">
          <div class="col-md-3 mx-auto">
              <a href="/developer"><button class="btn btn-primary" style="color:fff;">View More...</button></a>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- End section journal -->
  
  <!-- start sectoion contact -->
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">GET IN TOUCH</h2>

              <ul class="contact-details">
                <li><span>6 Church, Street</span></li>
                <li><span>Agbelekale, Lagos</span></li>
                <li><span>+23481-3257-1619</span></li>
                <li><span>akin4larintoxin@yahoo.com</span></li>
              </ul>

            </div>
          </div>

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="contactForm">
              <div class="row">

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="col-lg-6">
                  <div class="form-group contact-block1">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <input type="submit" class="btn btn-default btn-send" value="Send message">
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- start sectoion contact -->
    
@endsection
