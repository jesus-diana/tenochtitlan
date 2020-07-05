    <?php require_once("includes/initialize.php");
    if(studlogged_in()){
      ?>
      <script type="text/javascript">
        window.location = "index.php";
      </script>
      <?php
      }
      if (isset($_POST['btnlogin'])){

        $id = trim($_POST['id']);
        $upass = trim($_POST['pass']);

        $h_upass = $upass;
        if ($id =='' ) {

 ?>   <script type="text/javascript">
                alert("usuario incorrecto!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new Student();
		//make use of the static function, and we passed to parameters
		 $res = $user::Authenticatestudent($id);
		//then it check if the function return to true
    	//$stud = new Student();
		//$res= $stud::Authenticatestudent($uname);
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("usuario no registrado!contacta al administrador de la pagina.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>
 
<!doctype html>
<html lang="en">

  <head>
    <title>La Gran Tenochtitlan #276</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="<?php echo WEB_ROOT; ?>">Sistema Escolar</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              
            </div>

            
          </div>
        </div>

      </header> 
<div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/fondo.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">La Gran Tenochtitlan #276</h1>
            </div>
            <div class="col-lg-5 ml-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <h2 class="line-bottom">Entrar</h2>
            <p>Inicia sesion utilizando tu numero de estudiante y la contraseña que proporcionaste</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white">
                <h2>Iniciar Sesion</h2>
                <form action="login.php" method="POST">
                  <div class="form-group">
                    <input type="number" class="form-control" name="id" placeholder="Numero ID de Estudiante">
                  </div>
                
                  <div class="form-group">
                    <input type="submit" value="Entrar" name="btnlogin" class="btn btn-primary px-5">
                  </div>

                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <footer >
      <div class="container">
         
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos reservados | Esta pagina esta hecha  por Jesus Roman || Diana Araujo</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/popper.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/owl.carousel.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.sticky.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/aos.js"></script>

    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/main.js"></script>

  </body>

</html>

