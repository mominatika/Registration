<?php
include("backend/init.php");
?>
<html lang="en"><head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eNotepad Demo</title>

<?php
include("common/header.php");
?>
</head>

<body id="page-top">

<?php include("common/nav.php");?>

  <!-- Masthead -->
  <header class="masthead" style="
    /* float: left; */
    /* width: 100%; */
">
    <div class="container ">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class=" text-black font-weight-bold">My eNotepad</h1>
          <hr class="divider my-4">
        </div>
        <div id="edit_content" class="col-lg-12 align-self-end">
          <div class="note_form">
              <form method="post" name="note_form" id="note_form" role="form" class="form-horizontal" action="//localhost/" onsubmit="return false;">
                  <div class="form-group">
                      <div class="col-sm-12">
                          <input type="text" name="notetitle" id="edit_title" class="form-control title" placeholder="Note Title" tabindex="1" maxlength="200">
                          <input type="hidden" name="notetype" id="notetype" value="PlainText">
                          <input type="hidden" name="notenumber" id="notenumber">
                          <input type="hidden" name="autosavenotenumber" id="autosavenotenumber">
                      </div>
                  </div>
                  <div class=" align-items-left">
                    <div class="col-sm-12 align-items-left text-left" >
                  
                                <a href="#mode" onclick="switcher(this)">Enable Visual Editor</a>
                         
                        
                    </div>
                </div>
                  
      
                  <div class="form-group">
                      <div class="col-sm-12">

                        



                          <textarea style="width: 100%; font-size: 18px; line-height: 140%" name="notecontent" class="form-control textarea" id="editor" placeholder="Note Content" tabindex="2" rows="19"></textarea>
                      
                          
 
                        </div>
                  </div>
      
                  <div class="form-group">
                      <div class="col-md-6 text-left" style="margin-bottom: 20px;"><input type="button" class="btn btn-primary" value="Save" id="btnSaveNote" onclick="fnSaveNote();" tabindex="3"> &nbsp;
                              <input type="checkbox" id="make_public" checked="checked" disabled="disabled">
                              <label for="make_public" class="css-label">Make Public (<a href="/create_account" class="register" tabindex="4">Register</a> for private notes)</label>
                                                                  &nbsp; <span id="saveNoteMessage"></span>
                      </div>
                          
                  </div>
              </form>
      
          </div>
      </div>
        
      </div>
    </div>
  </header>

<?php include("common/notes.php");
 include("common/footer.php");
?>



<script src="ckeditor/ckeditor.js"></script>
<!--	<script src="js/sample.js"></script>-->
<script>

	//CKEDITOR.replace('editor');
	var l = 1;

function switcher(thi) {
    thi=$(thi);
    if (l == 0) {
        CKEDITOR.instances.editor.destroy();
        thi.html("Enable Visual Editor");
        l=1;
    } else {
       CKEDITOR.replace('editor',CKEDITOR.editorConfig);
       thi.html("Enable Default Editor");
        l=0;
    }
}
</script>

  


</body></html>