<?php
include("backend/init.php");
?><html lang="en"><head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eNotepad Demo</title>

<?php
require_once "common/header.php";
?>
</head>

<body id="page-top">

<?php
 require_once "common/nav.php";

?>

  <!-- Masthead -->
  <header class="masthead" style="
    /* float: left; */
    /* width: 100%; */
">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class=" text-black font-weight-bold">Register now</h1>
          <p>Quick fill below information, It's safe and free</p>
          <!-- <h1 class="divider my-4"> -->
        </div>
        <div id="edit_content" class="col-lg-12 align-self-end">
          <div class="note_form">
              <form method="post" name="note_form" id="note_form" role="form" class="form-horizontal" action="process.php">
                  <div class="col-md-5 text-left" style="margin: auto;">

                     <?php  
                     echo $app->getMessages();
                     ?>
                      <div class="form-group">
                         
                              <label for="name" class="sr-only">Full Name</label>
                                <input type="text" name="name" id="name" class="form-control " value="<?php if(isset($_POST['name'])) echo $post['name'] ?>" placeholder="Full Name"/>
                           
                      </div>
                      <div class="form-group">
                         
                              <label for="uname" class="sr-only">Email</label>
                                <input type="email" name="user_name" id="uname" class="form-control" value="<?php if(isset($uname)) echo $post['uname'] ?>" placeholder="Email address" />
                           
                      </div>
                      <div class="form-group">
                        
                                <label for="password" class="sr-only">Password</label>
                                <input type="text" name="password" id="password" class="form-control" value="<?php if(isset($uname)) echo $post['uname']; ?>" placeholder="Password" />
                           
                      </div>
          
                      <div class="form-group">
                          
                              
                              <input type="hidden" name="action" value="register"/>
                              <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block"  value="Register Now" id="btnSaveNote"  tabindex="3"> 
                              
                              
                              
                       </div>
                       <div class="checkbox">
          <label>
            <a href="login.php" class="">  Go to login page if you have already account.</a>
          </label>

        </div>
                       <div class="clear"><br/></div>
                          
                  </div>
              </form>
      
          </div>
      </div>
        
      </div>
    </div>
  </header>


 <?php 
 include("common/footer.php");
?>>

  


</body></html>