<?php 
session_start();

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
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WebLogMe Post Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./libs/css/materialize.min.css" />

       <link href="./__primg/ixon.png" rel="icon" type="image/png" />

     
    <link rel="stylesheet" href="./css/reset-min.css"/>
    <link rel="stylesheet" href="./css/stylesheet.css"/>
    <link rel="stylesheet" href="./css/webspin.css"/>
    
    <script src="./parser_rules/advanced.js" ></script>
    <script src="./dist/wysihtml5-0.3.0.js" ></script>

    <script type="text/javascript" src="./js/jquery-2.1.3.min.js"></script>
   

       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
            <script type="text/javascript" src="./libs/js/materialize.min.js"></script>  
              <style type="text/css">
          .profilePic_cnt,.text_onPic {
            float: right;
            width: 140px;
            height: 140px;
            -webkit-border-radius: 80px;
            -moz-border-radius: 80px;
            border-radius: 80px;


          }
      </style>
           </head>
    
   <script type="text/javascript">     
   var validRedirect = 0;
     
      $(document).ready(function(){
               $(".button-collapse").sideNav();
          $("#closeM").click(function(){
               $('#loading').closeModal();
                  $("#loadingContent").css({display:"none"});
                  $("#loadedContent").css({display:"none"});
                  validRedirect = 1;
                  window.location="./server/headerredirect.php?url=update";
          });       
          $("#postSbmtBtn").click(function(){
  
            if($("#postSbmtBtn").hasClass("disabled")){return true;}
            $("#postSbmtBtn").addClass("disabled");

            
             $('#loading').openModal();
              $("#loadingContent").css({display:"block"});

              var dataHtml = $("#wysihtml5-editor").val();
              var posting = $.post( "./server/process.php",{ d: dataHtml});
              posting.done(function(d) {
                console.log(d);
                setTimeout(function(){
                  $("#loadingContent").css({display:"none"});
                  $("#loadedContent").css({display:"block"});
                  $("#postSbmtBtn").removeClass("disabled");
                },1500);
                  
               });
           });
     
      });

  
          var confirmOnPageExit = function (e) 
          {
              if(validRedirect==0)
              {
                  e = e || window.event;
                  var message = 'Currently written post Content Will be destroyed..!';
                  if (e) 
                  {
                      e.returnValue = message;
                  }
                  return message;
            }
        };
        window.onbeforeunload = confirmOnPageExit;
   </script>
  </head>
  <body>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a class="btn-floating btn-large red">
            <i class="large mdi-action-dashboard"></i>
          </a>
          <ul>
            <li>
              <a class="btn-floating red darken-3 tooltipped" href="./signout" data-position="left" data-delay="1" data-tooltip="Signout" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                 <i class="large mdi-communication-call-made"></i>
              </a>
            </li>

            <li>
              <a class="btn-floating orange darken-1 tooltipped" href="./update.php" data-position="left" data-delay="1" data-tooltip="Update" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                 <i class="large mdi-image-flash-on"></i>
              </a>
            </li>
            <li>
              <a class="btn-floating green tooltipped" data-position="left" href="./<?php echo $_SESSION['blogId']; ?>" data-delay="1" data-tooltip="Visit your Blog" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                 <i class="large mdi-maps-local-library"></i>
              </a>
            </li>
            
            <li>
              <a class="btn-floating blue tooltipped" data-position="left" data-delay="1" data-tooltip="Account" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px); opacity: 0;">
                  <i class="large mdi-action-account-circle"></i>
              </a>
            </li>
          </ul>
    </div> 

   <ul class="side-nav fixed" id="nav-mobile">
       <li>
        <a id="logo-container" href="#" class="brand-logo">
              <div class="image-container wrapper_pic">
                <img id="front-page-logo" class="profilePic_cnt" src="./__primg/_defaultProfile.png">
              </div>
        </a>   
       </li>

        <li class="bold"><a href="./profile.php" class="waves-effect waves-blue">Profile</a></li>
        <li class="bold"><a href="./@<?php echo $_SESSION['blogId']; ?>/" target="_blank" class="waves-effect waves-green">Visit Blog</a></li>
        <li class="bold active"><a href="./newpost.php" class="waves-effect waves-purple">New Post</a></li>
        <li class="bold"><a href="./update.php" class="waves-effect waves-orange">Update Post</a></li>
        <li class="bold"><a href="./signout/" class="waves-effect waves-red">Sign out</a></li>
    </ul>


<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full "><i class="mdi-navigation-menu " style="color:teal;"></i></a>
    
    <div id="wysihtml5-editor-toolbar" >
        <ul class="commands">
          <li data-wysihtml5-command="bold" title="Make text bold (CTRL + B)" class="command"></li>
          <li data-wysihtml5-command="italic" title="Make text italic (CTRL + I)" class="command"></li>
          <li data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list" class="command"></li>
          <li data-wysihtml5-command="insertOrderedList" title="Insert an ordered list" class="command"></li>
          <li data-wysihtml5-command="createLink" title="Insert a link" class="command"></li>
          <li data-wysihtml5-command="insertImage" title="Insert an image" class="command"></li>
          <li data-wysihtml5-command-group="foreColor" class="fore-color" title="Color the selected text" class="command">
            <ul>

              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy"></li>
              <li data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue"></li>
            </ul>
          </li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" title="Insert headline 1" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" title="Insert headline 2" class="command"></li>
          <li data-wysihtml5-action="change_view" title="Show HTML" class="action"></li>
        </ul>
      <div data-wysihtml5-dialog="createLink" style="display: none;">
        <label>
          Link:
          <input data-wysihtml5-dialog-field="href" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save" class="waves-effect waves-light btn">Add Link</a>&nbsp;<a data-wysihtml5-dialog-action="cancel" class="waves-effect waves-light btn red">Cancel</a>
      </div>

      <div data-wysihtml5-dialog="insertImage" style="display: none;">
        <label>
          Image:
          <input data-wysihtml5-dialog-field="src" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save" class="waves-effect waves-light btn">Add Image</a>&nbsp;<a data-wysihtml5-dialog-action="cancel" class="waves-effect waves-light btn red">Cancel</a>
      </div>
    </div>
    <section>

      <button class="waves-effect waves-light btn tooltipped" data-position="right" data-delay="60" data-tooltip="Add this post to your Blog !" id="postSbmtBtn" >
      <i class="mdi-file-cloud left"></i>Post It
      </button>

      <textarea id="wysihtml5-editor" spellcheck="false" wrap="hard" style="margin-top:10px;word-wrap:break-word; "  autofocus placeholder="Enter something ..."></textarea>
    </section>

    <!-- Modal Structure -->
  <div id="loading" class="modal" align="center" style="margin-top:100px;float:left;">
    <div id="loadingContent" class="modal-content">
    <svg class="spinner-container" width="65px" height="65px" viewBox="0 0 52 52">
      <circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px"></circle>
    </svg>
    <h1>Please Wait...</h1>
    </div>
      <div id="loadedContent" style="display:none;"class="modal-content">
        <h4>Post added Succesfully !</h4>
        <a href="#!" id="closeM" class="modal-action modal-close waves-effect blue darken-1 btn ">Okay</a>
      </div>
      
    
    </div>

    <script>
      var editor = new wysihtml5.Editor("wysihtml5-editor", {
        toolbar:     "wysihtml5-editor-toolbar",
        stylesheets: ["./css/reset-min.css", "css/editor.css"],
        parserRules: wysihtml5ParserRules
      });
      
      editor.on("load", function() {
        var composer = editor.composer;
        composer.selection.selectNode(editor.composer.element.querySelector("h1"));
      });
    </script>
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