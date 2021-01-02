<?php
include("backend/init.php");
?>
<html lang="en"><head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>


<?php
include("common/header.php");
?>
</head>

<body id="page-top">

<?php include("common/nav.php");?>

  
  <!-- Masthead -->
  <header class="masthead" style="
     /*float: left; */
     /*width: 100%; */
">
    <div class="container ">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class=" text-black font-weight-bold">Login</h1>
          <hr class="divider my-4">
        </div>
        <div id="edit_content" class="col-lg-12 align-items-center">
          <div class="note_form">
              <form method="post" name="note_form" id="note_form" role="form" class="form-horizontal text-center" action="process.php" >
                 
               
                      
                <div class="col-md-5 text-left" style="margin: auto;">
                    
                    
                    <?php echo $app->getMessages();?>

                      <div class="form-group">
                         
                              <label for="uname" class="sr-only">User Name</label>
                                <input type="text" name="user_name" id="uname" class="form-control " placeholder="Email address" />
                           
                      </div>
                      <div class="form-group">
                        
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control " placeholder="Password" />
                           
                      </div>
          
                      <div class="form-group">
                          
                              
                              <input type="hidden" name="action" value="login" />
                              <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in" id="btnSaveNote"  tabindex="3"> 
                              
                       </div>
                       <div class="checkbox">
          <label>
            <a href="register.php" class="align-center">Register now if you new </a>
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
?>


</body></html>