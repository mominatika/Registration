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
    /* float: left; */
    /* width: 100%; */
">
    <div class="container ">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class=" text-black font-weight-bold">About Us</h1>
          <hr class="divider my-4">
        </div>
        
        <div class="jumbotron text-left">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="/" role="button">View navbar docs »</a>
      </div>
        <div id="edit_content" class="col-lg-12 align-items-center">
          <div class="note_form">
              
               
                <div class="col-md-6">
                    <?php $app->getMessages();?>
                </div>  
                <div class="clear"></div></div>
                <div class="col-md-12 text-left">
                    
                   <p>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et lectus consequat, sagittis metus id, porta sapien. Proin faucibus ligula eu justo venenatis, vel efficitur lectus interdum. Nunc mattis nec velit nec congue. Donec non tristique metus. Pellentesque justo arcu, euismod et aliquet eu, gravida id velit. Nullam bibendum lacinia nulla, sed tempor augue porttitor scelerisque. Vestibulum sagittis ante lacus, quis sollicitudin ante malesuada id. Fusce venenatis tincidunt metus, eu lobortis ipsum sagittis ac. Fusce non imperdiet metus. Maecenas sollicitudin a nunc ut efficitur. Phasellus volutpat non est sed consectetur. Vestibulum mollis convallis nisi vel aliquet. Aenean dignissim dignissim felis, sed sollicitudin orci aliquet ac.
</p><p>
Suspendisse dolor ante, interdum sed consectetur non, auctor sit amet mauris. Phasellus pellentesque ac urna eget fermentum. Nullam mauris nulla, tristique at massa ac, fermentum blandit dui. Nam aliquet, neque feugiat vulputate imperdiet, quam arcu efficitur risus, eu ultrices enim arcu malesuada diam. Maecenas at cursus felis, non vulputate justo. In malesuada in ante eu porta. Nulla at magna sapien.
</p><p>
Fusce sagittis, libero id finibus convallis, quam eros dignissim tortor, vel finibus eros diam vel nisi. Aliquam erat volutpat. Suspendisse et interdum massa, vel fringilla felis. Quisque et lorem ante. Cras enim quam, tincidunt vitae ligula scelerisque, finibus fringilla purus. Suspendisse vel vulputate nibh, vitae bibendum velit. Fusce viverra vestibulum lectus nec dignissim. Donec aliquet turpis quis sapien malesuada, ut accumsan lorem volutpat.
</p>

                       <div class="clear"><br/></div>
                          
                  </div>
      
          </div>
      </div>
        
      </div>
    </div>
  </header>
<?php 
 include("common/footer.php");
?>


</body></html>