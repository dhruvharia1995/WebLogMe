
<!DOCTYPE html>
<html>
<head>
    <title>Help us !!</title>

        <link rel="stylesheet" type="text/css" href="./libs/css/materialize.min.css" />
       <link href="./__primg/ixon.png" rel="icon" type="image/png" />
          <style type="text/css">
            .previewImage{

            }
            .imgtagtheme{
              width: 300px!important;
            }
            .themeShowImg{
              width: 200px;
            box-shadow: 3px 3px 2px #CCCCCC ;
            }
            td{
              text-align: center;

            }
            html{background: url(./img/bg_pattern_r1.png);}
          </style>
           <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
            <script type="text/javascript" src="./libs/js/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="./libs/js/materialize.min.js"></script>
            <script type="text/javascript">
          
            $(document).ready(function(){
                $('.button-collapse').sideNav(); 
                $('select').material_select();
                $('.select-wrapper').addClass('w-200');
                $('.select-wrapper').addClass('left50');
                $('.collapsible-header').attr('title','click to edit');
            });

            </script>
           </head>
    <body>
    <!-- float-->
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

<!-- Side Bar -->
<header>
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
      <img src="./__primg/ixon.png" class="logo" style="margin-top:0px;" width="120px" />
        <a href="#!" class="brand-logo left10">WebLog.me</a>
      </div>
    </nav>
  </div>

  </header> 


  <!-- main content -->
  <main style="">
    
    <div class="container">
        <h4 class="header small" style="text-align:left">Submit your feed back.</h4>
    </div>
  </main>
  
  
          
    </body>
</html>
