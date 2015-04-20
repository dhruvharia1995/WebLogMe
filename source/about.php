
<!DOCTYPE html>
<html>
<head>
    <title>About us..</title>

    <link rel="stylesheet" type="text/css" href="./libs/css/materialize.min.css" />
      <link rel="favicon" >
       <link href="./__primg/ixon.png" rel="icon" type="image/png" />
          <style type="text/css">
            html{background: url(./img/bg_pattern_r1.png);}
            .crpic{width: 180px;border-radius:90px; }
            .trans{
              background: transparent;
            }
          </style>
           <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
            <script type="text/javascript" src="./libs/js/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="./libs/js/materialize.min.js"></script>
            <script type="text/javascript">
          
            </script>
           </head>
    <body>
    <!-- float-->
   <?php 
    //if(isset($_SESSION['uid']))
    {
   ?>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large red">
            <i class="large mdi-action-dashboard"></i>
          </a>
          <ul>
            <li>
              <a class="btn-floating red darken-3 tooltipped" data-position="left" data-delay="1" data-tooltip="Signout" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                 <i class="large mdi-communication-call-made"></i>
              </a>
            </li>
          </ul>
    </div>
  <?php 
    }
  ?> 

<!-- Side Bar -->
<header>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
      <img src="./__primg/ixon.png" class="logo" style="margin-top:0px;" width="120px" />
        <a href="#!" class="brand-logo left10">WebLog.me</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" >
        <li><a href="./signup" >Sign Up</a></li>
        <li><a href="./signin">Sign In</a></li>
      </ul>
      </div>
    </nav>
  </div>
</header> 

<!-- main content -->
  <main>
   <div class="container">
        <div class="col s12 m6 w-1000 " style="position:relative;">
            <div class="card teal  lighten-3">
              <div class="card-content">
                <span class="card-title pink-text" style="font-size:26px" ><b>Faster and Better !</b></span>
                <p  style="font-size:18px">
                <i class="mdi-image-hdr-strong"></i>
                WebLog.me is an openSource Web Logging System that allows you to put your own blog online for no costs.
                We provides Easy access to your blog and chance to bring Inspiration to people by sharing your Thoughts.
                You can share Pictures from the Internet, your knowledge, Quotes, Useful Informations, PJ's and lots more...
                <br>
                <i class="mdi-image-hdr-strong"></i>
                We have WiSiHTML 5 editor that allows you access to a Simple Word Porcessor(With hyperText Editor also) by which you can create a post with differnt font size and different colors and Link Media contents like Images and add hyperlinks.
                However We have not implemented the Audio-video featue yet, but you can add those with the HyperText Editor of your post Dashboard.
                <br>
                <i class="mdi-image-hdr-strong"></i>
                Aim of WebLog me is to provide more speed as possible to the BlogReader.So there is no database used for Post Management.
                Which provides almost no-Execution on server side, so the response of the Blog page will be too fast.
                To achive this aim, We have removed the Database system from Post management as well as developed a completely new algorithm.  
                The Beautiness of this algorithm is, it is faster than we've expected and it opened a new door for us without we could not achive the no-Database facility.


              </div>
              <div class="card-action">
                 <a href="./signin/" class="waves-effect waves-light  blue darken-2 btn" style="color:white">
                  Sign In!!
                </a>
                <a href="./signup/" class="waves-effect waves-light  green btn darken-1" style="color:white">
                  Register Now !!
                </a>
              </div>
            </div>
        </div>




    <div class="row">
      <div id="team" class="section scrollspy">
        <div class="row">
          <h4 class="header">Meet the Team</h4>
          <p class="caption">We are a team of students from Government Polytechnic Ahmedabad.</p>
          <div class="s12 center">
            <div class="image-container">
              <img src="__primg/WeLogMe_team.jpeg" style="width:100%;">
            </div>
          </div>
        </div>
        <br>
        

        <div class="row">
          <div class="col s12 m5 center-on-small-only left50">
            <div class="image-container">
              <img class="crpic" src="../__primg/pics/dhruv.jpg">
              </div>
          </div>
          <div class="col s12 m7">
            <h4>Dhruv Haria</h4>
            <p>Dhruv is a web developer, Working as social media manager as well as information &amp; web security manager, and has an excellent talent in Web-promotions.</p>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m5 center-on-small-only">
            <div class="image-container">
            <img class="crpic" src="../__primg/pics/marut.jpg">
              </div>
          </div>
          <div class="col s12 m7">
            <h4>Marut Thakor</h4>
            <p>Marut is a designer, Front End Developer as well as Media manager, who has excellent capabilities of ideation of design and innovation !</p>
          </div>
        </div>

        <div class="row">
          <div class="col s12 m5 center-on-small-only">
            <div class="image-container">
              <img class="crpic" src="../__primg/pics/jimish.jpg">
            </div>
          </div>
          <div class="col s12 m7">
            <h4>Jimish Fotariya</h4>
            <p>Jimish is a compuer geek, a logic developer, has an excellent knowledge in client side programming and has 2 years of experience as a PHP developer !</p>
          </div>
        </div>


      </div>
    </div>
   </div>
  </main>
  
  
          
    </body>
</html>
