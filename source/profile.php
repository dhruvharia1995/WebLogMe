<?php 
session_start();
//  die(print_r($_COOKIE));
if(isset($_SESSION['apr']) )
{ 
  if($_SESSION['apr'] == 0)
  {
      header("location:./server/headerredirect.php?url=appr");
  }
}
if(isset($_SESSION['email']))
{
  if(strlen($_SESSION['email']) > 4 )
  {
    
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email= $_SESSION['email'];
    $blogName = $_SESSION['blogName'] ;
    $blogId = $_SESSION['blogId'];
    $dob = $_SESSION['dob'];

    include("./server/getThemeNum.php");
    $tn = $inc_themeNumber;

    
 ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $fname."&nbsp;".$lname; ?> Profile</title>

        <link rel="stylesheet" type="text/css" href="./libs/css/materialize.min.css" />
       <link href="./__primg/ixon.png" rel="icon" type="image/png" />
           <link rel="stylesheet" href="./css/webspin.css"/>

          <style type="text/css">
            .previewImage{

            }
            .imgtagtheme{
              width: 300px!important;
            }html{background: url(./img/bg_pattern_r1.png);}
          </style>
           <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
            <script type="text/javascript" src="./libs/js/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="./libs/js/materialize.min.js"></script>
            <script type="text/javascript">
          
            $(document).ready(function(){
                $('.button-collapse').sideNav(); 

                $('#opt_lol_<?php echo $tn; ?>').attr("selected","true");
                    var valOthm = $("#lolTheme").val();
                    $("#lolThemeImg").attr("src","./__primg/themes/theme_"+valOthm+".png");

                $('select').material_select();
                $('.select-wrapper').addClass('w-200');
                $('.select-wrapper').addClass('left50');
                $('.collapsible-header').attr('title','click to edit');
                $("#lolTheme").change(function(){
                    var valOthm = $("#lolTheme").val();
                    $("#lolThemeImg").attr("src","./__primg/themes/theme_"+valOthm+".png");
                });
                $("#changeThemeSbmt").click(function(){

                            var themeNumber = $("#lolTheme").val();
                            var posting = $.post( "./server/changetheme.php",{ t: themeNumber});
                            
                            posting.done(function(d) {
                              console.log(d);
                              setTimeout(function(){
                                $("#loadingContent").css({display:"none"});
                                $("#loadedContentDelete").css({display:"block"});
                              },500);
                          });  
                });
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
          
            <li>
              <a class="btn-floating purple tooltipped" data-position="left" data-delay="1" data-tooltip="New Post" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                  <i class="large mdi-editor-mode-edit"></i>
              </a>
            </li>

            <li>
              <a class="btn-floating orange darken-1 tooltipped" data-position="left" data-delay="1" data-tooltip="Update" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                 <i class="large mdi-image-flash-on"></i>
              </a>
            </li>
            <li>
              <a class="btn-floating green tooltipped" data-position="left" data-delay="1" data-tooltip="Visit your Blog" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                 <i class="large mdi-maps-local-library"></i>
              </a>
            </li>
        
          </ul>
    </div> 

<!-- Side Bar -->
<header>
	 <ul  class="side-nav fixed" id="nav-mobile" style="width:220px;">
       <li>
        <a id="logo-container" href="#" class="brand-logo">
              <div class="image-container wrapper_pic">
                <img id="front-page-logo" class="profilePic_cnt" src="__primg/_defaultProfile.png">
              
                <span class="text_onPic">
                    <button id="changeProfPic" class="btn waves-effect waves-light changeProfPic">Change
                      <i class="mdi-editor-mode-edit right"></i>
                    </button>
                </span>
              </div>
        </a>   
       </li>


       <li class="bold active"><a href="./profile.php" class="waves-effect waves-blue">Profile</a></li>
       <li class="bold"><a href="./@<?php echo $blogId; ?>" target="_blank" class="waves-effect waves-green">Visit Blog</a></li>
       <li class="bold"><a href="./newpost.php" class="waves-effect waves-purple">New Post</a></li>
       <li class="bold"><a href="./update.php" class="waves-effect waves-orange">Update Post</a></li>
       <li class="bold"><a href="./signout/" class="waves-effect waves-red">Sign out</a></li>
    
    </ul>

      <nav class="top-nav">
          <div class="container">
            <div class="nav-wrapper">
            <a class="page-title"></a>
              <a class="page-title"><?php echo $fname."&nbsp;".$lname; ?></a>  
            </div>
          </div>
          <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full"><i class="mdi-navigation-menu"></i></a>
        </nav>
  </header> 


  <!-- main content -->
  <main style="padding-left:90px;">
    
    <div class="container">
    <h4 class="header small">Profile Manager</h4>
       <ul class="collapsible" data-collapsible="accordion">
       <li>
      <div class="collapsible-header"><i class="mdi-action-account-box"></i>Name : <?php echo $fname."&nbsp;".$lname; ?></div>
      <div class="collapsible-body">
         <div class="row">
    
         <div class="input-field col s6 left50">
         <i class="mdi-action-swap-vert prefix"></i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">Change your First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Change your Last Name</label>
        </div>
     
        <button class="waves-effect waves-light btn left50" id="nameChangeSbmtBtn" >
           <i class="mdi-editor-merge-type right"></i>Change it
        </button>
      </div>
    </div>
      </li>
    <li>
      <div class="collapsible-header"><i class="mdi-communication-email"></i>Email : <?php echo $email; ?></div>
      <div class="collapsible-body">
         <div class="input-field col s6">
              <i class=" prefix"></i>
              <input id="icon_prefix_Email" type="email" class="validate w-500">
              <label for="icon_prefix_Email">Change your Email address</label>
          </div>
          <button class="waves-effect waves-light btn left50" id="emailChangeSbmtBtn" >
           <i class="mdi-editor-merge-type right"></i>Change it
        </button>
      </div>
    </li>
        <li>
      <div class="collapsible-header"><i class="mdi-action-event"></i>Birth Date : <?php echo $dob; ?></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="mdi-communication-vpn-key"></i>Change Password.</div>
      <div class="collapsible-body">
         <div class="input-field col s6">
              <i class=" prefix"></i>
              <input id="icon_prefix_pwd1" type="password" class="validate w-500" >
              <label for="icon_prefix_pwd1">Type Old Password</label>
              </div>
              <div class="input-field col s6">
               <i class=" prefix"></i>
               <input id="icon_prefix_pwd2" type="password" class="validate w-500" >
              <label for="icon_prefix_pwd2">Type new Password</label>
          </div>
          <button class="waves-effect waves-light btn left50" id="emailChangeSbmtBtn" >
           <i class="mdi-editor-merge-type right"></i>Change it
        </button>
      </div>
    </li>

    <li>
      <div class="collapsible-header"><i class="mdi-maps-local-library"></i>Blog : <?php echo $blogName; ?> (@<?php echo $blogId; ?>)</div>
      <div class="collapsible-body">
         <div class="input-field col s6">
              <i class=" prefix"></i>
              <input id="icon_prefix_blogName" type="text" class="validate w-500" >
              <label for="icon_prefix_blogName">Change your Blog Name</label>
          </div>
          <button class="waves-effect waves-light btn left50" id="emailChangeSbmtBtn" >
           <i class="mdi-editor-merge-type right"></i>Change it
        </button>
      </div>
    </li>

      <li>
      <div class="collapsible-header"><i class="mdi-editor-format-color-fill"></i>Blog Theme : Theme <?php echo $tn; ?></div>
      <div class="collapsible-body">
            <select id="lolTheme" class="w-500">
              <option id="opt_lol_0" value="0">Theme Default</option>
              <option id="opt_lol_1" value="1">Theme 1</option>
              <option id="opt_lol_2" value="2">Theme 2</option>
              <option id="opt_lol_3" value="3">Theme 3</option>
              <option id="opt_lol_4" value="4">Theme 4</option>
            </select>
                <div class="previewImage">           
               <img class="imgtagtheme left50" id="lolThemeImg" src="./__primg/themes/theme_0.PNG" />
          </div>
      <button class="waves-effect waves-light btn left50" id="changeThemeSbmt" >
           <i class="mdi-editor-merge-type right"></i>Change it
        </button>
      </div>
      
    </li>

  </ul>
    </div>

  </main>
   

    <!-- Modal Structure -->
  <div id="loading" class="modal" align="center" style="margin-top:100px;float:left;">
        <div id="loadingContent" class="modal-content">
        <svg class="spinner-container" width="65px" height="65px" viewBox="0 0 52 52">
          <circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px"></circle>
        </svg>
        <h1>Please Wait...</h1>
    </div>
      <div id="loadedContent" style="display:none;"class="modal-content">
        <h4 class="dataToShow"></h4>
      <a href="#!" id="closeM" class="modal-action modal-close waves-effect red lighten-1 btn">Close</a>
      </div>
      
    
    </div>
  
  
          
    </body>
</html>
<?php 
    }
    else{
      header("location:./server/headerredirect.php?url=signin");
    }
}
else{
  header("location:./server/headerredirect.php?url=signin");
}


 ?>