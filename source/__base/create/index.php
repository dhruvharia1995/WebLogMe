<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WebLogMe</title>
    <link rel="stylesheet" href="../../css/reset-min.css">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    <script src="../../parser_rules/advanced.js" ></script>
    <script src="../../dist/wysihtml5-0.3.0.js" ></script>

    <script type="text/javascript" src="../../js/jquery-2.1.3.min.js"></script>
   <script type="text/javascript">
     
      $(document).ready(function(){
        
          $("#postSbmtBtn").click(function(){
              var dataHtml = $("#wysihtml5-editor").val();
              var posting = $.post( "./server/process.php",{ d: dataHtml});
              posting.done(function(d) {alert( d); });
           });
     
      });

  
              var confirmOnPageExit = function (e) 
          {
            e = e || window.event;
            var message = 'Currently written post Content Will be destroyed..!';
            if (e) 
            {
                e.returnValue = message;
            }
            return message;
        };
        window.onbeforeunload = confirmOnPageExit;
   </script>
  </head>
  <body>
  <div class="result"></div>
    <div id="wysihtml5-editor-toolbar" style="margin-top:30px;">
        <ul class="commands">
          <li data-wysihtml5-command="bold" title="Make text bold (CTRL + B)" class="command"></li>
          <li data-wysihtml5-command="italic" title="Make text italic (CTRL + I)" class="command"></li>
          <li data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list" class="command"></li>
          <li data-wysihtml5-command="insertOrderedList" title="Insert an ordered list" class="command"></li>
          <li data-wysihtml5-command="createLink" title="Insert a link" class="command"></li>
          <li data-wysihtml5-command="insertImage" title="Insert an image" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" title="Insert headline 1" class="command"></li>
          <li data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" title="Insert headline 2" class="command"></li>
          <li data-wysihtml5-command-group="foreColor" class="fore-color" title="Color the selected text" class="command">
            <ul>
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
          <li data-wysihtml5-command="insertSpeech" title="Insert speech" class="command"></li>
          <li data-wysihtml5-action="change_view" title="Show HTML" class="action"></li>
        </ul>
      <div data-wysihtml5-dialog="createLink" style="display: none;">
        <label>
          Link:
          <input data-wysihtml5-dialog-field="href" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
      </div>

      <div data-wysihtml5-dialog="insertImage" style="display: none;">
        <label>
          Image:
          <input data-wysihtml5-dialog-field="src" value="http://">
        </label>
        <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
      </div>
    </div>
    <section>

      <button id="postSbmtBtn" style="float:right">Post It</button> 
      <textarea id="wysihtml5-editor" spellcheck="false" wrap="hard" style="margin-top:10px;word-wrap:break-word; "  autofocus placeholder="Enter something ..."></textarea>
    </section>
    <script>
      var editor = new wysihtml5.Editor("wysihtml5-editor", {
        toolbar:     "wysihtml5-editor-toolbar",
        stylesheets: ["../../css/reset-min.css", "css/editor.css"],
        parserRules: wysihtml5ParserRules
      });
      
      editor.on("load", function() {
        var composer = editor.composer;
        composer.selection.selectNode(editor.composer.element.querySelector("h1"));
      });
    </script>
  </body>
</html>