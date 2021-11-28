<?php 
	session_start();
	if(!isset($_SESSION['rol'])){
		header('location: ../login/index.html');
	}else{
	if($_SESSION['rol'] != 2){
		header('location: ../login/index.html');
	}	
	}
    $tutor=$_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tutor - Permisos</title>
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
      <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="../assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
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
                      <a href="index.html">
                          <img class="img-fluid" src="../assets/images/logo.png" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
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
                      <div class="sidebar_toggle"></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                                                    
                              </div>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Menú</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="active">
                                <a href="tutor.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-receipt"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Permisos</span>
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
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Sesión</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class=" ">
                                <a href="cerrars.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b></b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Cerrar Sesión</span>
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
                                          <p class="m-b-0">Bienvenido, Tutor</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <i class="fa fa-home"></i>
                                          </li>
                                          <li class="breadcrumb-item"><a>Permisos</a>
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
                                    <!-- Hover table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Permisos Solicitados</h5>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr class="bg-primary">
                                                                <th>Matrícula</th>
                                                                <th>Apellido Paterno</th>
                                                                <th>Apellido Materno</th>
                                                                <th>Nombre</th>
                                                                <th>Dias del permiso</th>
                                                                <th>Motivo</th>
                                                                <th>N° de Permiso</th>
                                                                <th>Status</th>
                                                                <th>Fecha de solicitud</th>
                                                                <th>Observación</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                              include_once('../bd/db.php');
                                                              $tutor=$_SESSION['nombre'];
                                                              $sql="SELECT * FROM tbl_user INNER JOIN solicitudpermiso_tbl_user WHERE solicitudpermiso_tbl_user.idtbl_user = tbl_user.idtbl_user AND tx_statuspermiso='Pendiente' AND tutor=$tutor";
                                                              $result=mysqli_query($con,$sql);

                                                              while($mostrar=mysqli_fetch_array($result)){
                                                                  ?>

                                                                  <tr>
                                                                      <td><?php echo $mostrar['matriculauser'] ?></td>
                                                                      <td><?php echo $mostrar['tx_appaterno'] ?></td>
                                                                      <td><?php echo $mostrar['tx_apmaterno'] ?></td>
                                                                      <td><?php echo $mostrar['tx_nombreuser'] ?></td>
                                                                      <td><?php echo ($mostrar['dias']." de ". $mostrar['mes']." del ". $mostrar['anio'])?></td>
                                                                      <td><?php echo $mostrar['motivo'] ?></td>
                                                                      <td><?php echo $mostrar['No_permiso'] ?></td>
                                                                      <td><?php echo $mostrar['tx_statuspermiso'] ?></td>
                                                                      <td><?php echo $mostrar['dt_solicitud'] ?></td>
                                                                      <form action="confirmado.php?id=<?php print $mostrar['idsolicitudpermiso']?>" method="post">
                                                                            <td><input type="text" name="observaciones" placeholder="Observaciones"></td>
                                                                            <td>
                                                                                <button name="guardar" class="waves-effect waves-dark">
                                                                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Aceptar</span>
                                                                                <span class="pcoded-mcaret"></span>
                                                                                </button>
                                                                                
                                                                                <button name="eliminar" class="waves-effect waves-dark">
                                                                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Rechazar</span>
                                                                                <span class="pcoded-mcaret"></span>
                                                                                </button>
                                                                            </td>
                                                                      </form>
                                                                      
                                                                  </tr>
                                                                  <?php 
                                                              }
                                                          ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Contextual classes table ends -->
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
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="../assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="../assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="../assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="../assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="../assets/js/SmoothScroll.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="../assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="../assets/pages/widget/amchart/gauge.js"></script>
    <script src="../assets/pages/widget/amchart/serial.js"></script>
    <script src="../assets/pages/widget/amchart/light.js"></script>
    <script src="../assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="../assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="../assets/js/script.js "></script>
</body>

</html>