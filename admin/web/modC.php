<?php 
	session_start();
	if(!isset($_SESSION['rol'])){
		header('location: ../../index.html');
	}else{
	if($_SESSION['rol'] != 1){
		header('location: ../../index.html');
	}	
	}
?>
<?php  
include_once "../../bd/db.php";
$id = $_GET['id'];
$queryd = "SELECT * FROM carrera WHERE idcarrera=$id";
$resd = mysqli_query($con, $queryd);
while($mostrar=mysqli_fetch_array($resd)){
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Modificar Alumno</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../../assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a>
                          <img class="img-fluid" src="../../assets/images/logo.png" alt="Theme-Logo" />
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                                                    
                              </div>
        
                              
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Men??</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="../index.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Permisos Solicitados</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                              <li class=" ">
                                  <a href="alumnos.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Alumnos</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="active">
                                    <a href="carreras.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-pencil"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Carreras</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                </li>
                            <li class=" ">
                                <a href="personal.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-notepad"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Personal</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="foro.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-comments"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Foro</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="permisos_aceptados.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Permisos</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Datos</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="reg_datos.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-write"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Registrar Nuevos Datos</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Sesi??n</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="actions/cerrars.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Cerrar Sesi??n</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                          </ul>
                    </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Inicio</h5>
                                          <p class="m-b-0">Bienvenido, Administrador</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a>Inicio</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                      <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12">
                                                <!-- Tab panes -->
                                                <div class="tab-content tabs card-block">
                                                    <div class="tab-pane active" id="tutores" role="tabpanel">
                                                        <!-- Hover table card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Modificar Carrera</h5>
                                                            </div>
                                                            <div class="card-block">
                                                                <form method="post" action="actions/modificC.php?id=<?php print $mostrar['idcarrera'] ?>" class="form-material">
                                                                    <div class="form-group form-primary">
                                                                        <input type="text" name="carrera" value="<?php echo $mostrar['tx_carrera'] ?>" class="form-control" required="">
                                                                        <span class="form-bar"></span>
                                                                    </div>
                                                                    <div>
                                                                        <br><input type="submit" name="guardar" value="Guardar" class="btn btn-primary btn-round waves-effect waves-light" />
                                                                    </div>
                                                                </form>
                                                                <?php 
                                                                    } 
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="../../assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../../assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="../../assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="../../assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="../../assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../../assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../../assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="../../assets/js/SmoothScroll.js"></script>
    <script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="../../assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="../../assets/pages/widget/amchart/gauge.js"></script>
    <script src="../../assets/pages/widget/amchart/serial.js"></script>
    <script src="../../assets/pages/widget/amchart/light.js"></script>
    <script src="../../assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="../../assets/js/pcoded.min.js"></script>
    <script src="../../assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="../../assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="../../assets/js/script.js "></script>
</body>

</html>