<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/listarHistorial.php';

sec_session_start();


?>
<html lang="en" class="app js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios"><head>  
<meta charset="utf-8">
 <?php if (login_check($mysqli) == true) : ?>
  <title>StonePay - Historial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/css3/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/icon.css" type="text/css">
  <link rel="stylesheet" href="css/font.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css">  
 
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class="">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.html" class="navbar-brand">
          
          <span class="hidden-nav-xs">     StonePay</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      
      
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="images/a0.png" alt="...">
            </span><?php echo htmlentities($_SESSION['username']); ?><b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">            
            <li>
              <span class="arrow top"></span>
              <a href="#">Configuracion</a>
            </li>
            <li>
              
            </li>
            
            
            <li class="divider"></li>
            <li>
              <a href="includes/logout.php" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black aside-md hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f scrollable">
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 869px;"><div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railopacity="0.2" style="overflow: hidden; width: auto; height: 869px;">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                  <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb avatar pull-left m-r">                        
                        <img src="images/a0.png" class="dker" alt="...">
                        <i class="on md b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-t-xs">
                          <strong class="font-bold text-lt"><?php echo htmlentities($_SESSION['username']); ?></strong> 
                          <b class="caret"></b>
                        </span>
                        
                         
                               <strong class="text-muted text-xs block" id="cambiaAdmin"></strong> 

                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">                      
                      <li>
                        <span class="arrow top hidden-nav-xs"></span>
                        <a href="#">Configuracion</a>
                      </li>
                      
                      
                      
                      <li class="divider"></li>
                      <li>
                        <a href="includes/logout.php" >Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>                


                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Usuario</div>
                  <ul class="nav nav-main" data-ride="">
                    <li class="">
                      <a href="dashboard.php" class="auto">
                        <i class="i i-statistics icon">
                        </i>
                        <span class="font-bold">Historial</span>
                      </a>
                    </li>
                    <li class="">
                      <a href="codigos.php" class="auto">
                                             
                        
                        
                        <i class="i i-stack icon">
                        </i>
                        <span class="font-bold">Generar de codigos QR</span>
                      </a>
                      <ul class="nav dk" style="display: none;">
                        <li>
                          <a href="layout-color.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Color option</span>
                          </a>
                        </li>
                        <li>
                          <a href="layout-hbox.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Hbox layout</span>
                          </a>
                        </li>
                        <li>
                          <a href="layout-boxed.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Boxed layout</span>
                          </a>
                        </li>
                        <li>
                          <a href="layout-fluid.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Fluid layout</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    
                    <li class="">
                      
                      <ul class="nav dk" style="display: none;">
                        <li>
                          <a href="profile.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Profile</span>
                          </a>
                        </li>
                        <li>
                          <a href="invoice.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Invoice</span>
                          </a>
                        </li>
                        <li>
                          <a href="intro.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Intro</span>
                          </a>
                        </li>
                        <li>
                          <a href="master.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Master</span>
                          </a>
                        </li>
                        <li>
                          <a href="gmap.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Google Map</span>
                          </a>
                        </li>
                        <li>
                          <a href="jvectormap.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Vector Map</span>
                          </a>
                        </li>
                        <li>
                          <a href="signin.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Signin</span>
                          </a>
                        </li>
                        <li>
                          <a href="signup.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Signup</span>
                          </a>
                        </li>
                        <li>
                          <a href="404.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>404</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      
                      <ul class="nav dk">
                        <li>
                          <a href="mail.html" class="auto">                            
                            <b class="badge bg-success lt pull-right">2</b>                                                        
                            <i class="i i-dot"></i>

                            <span>Mailbox</span>
                          </a>
                        </li>
                        <li>
                          <a href="fullcalendar.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Calendar</span>
                          </a>
                        </li>
                        <li>
                          <a href="project.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Project</span>
                          </a>
                        </li>
                        <li>
                          <a href="media.html" class="auto">                                                        
                            <i class="i i-dot"></i>

                            <span>Media</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <div class="line dk hidden-nav-xs"></div>
                  <span class="text-muted text-xs block" id="cambiaAdmin"></span>
                  <ul class="nav">
                    
                    
                    
                  </ul>
                  
                  <ul class="nav">
                    <li>
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        
                        <i class="fa fa-search">
                        </i>
                        <span class="font-bold">Buscar Usuarios</span>
                      </a>
                    </li>

                    
                  </ul>
                </nav>
                <!-- / nav -->
              </div><div class="slimScrollBar" style="width: 10px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 739.628795298727px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 0px; background: rgb(51, 51, 51);"></div></div>
            </section>
            
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="modal.lockme.php" class="btn btn-icon pull-right m-l-xs m-r-xs">
                <i class="i i-logout"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">
            <section class="scrollable padder">
              <div class="m-b-md">
                <h3 class="m-b-none">Historial</h3>
              </div>
              
              <section class="panel panel-default">
                <header class="panel-heading">Historial de Transacciones</header>
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                    
                                    
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-sm btn-default active">
                        <input type="radio" name="options" id="option1"> Day
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options" id="option2"> Week
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options" id="option2"> Month
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="20"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label></th>
                        <th class="th-sortable active" data-toggle="class">Address<span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th>Monto</th>
                        <th>Fecha</th>

                        <th width="30">Estado</th>
<th>Codigo</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>1KLdiSkCpMUbfDXQCmaAck5cDaDX8gan21 </td>
                        <td>$ 100</td>
                        <td>Jul 22, 2013</td>
                        <td>

                          <a href="#" class="btn btn-s-md btn-warning">Pago Pendiente</a>
                        </td>
<td>#CODIGO</td>
                      </tr>
                      <tr>
                        <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>1KLdiSkCpMUbfDXQCmaAck5cDaDX8gan21 </td>
                        <td>$ 100</td>
                        <td>Jul 22, 2013</td>
                        <td>
                          <a href="#" data-toggle="class"><i class="fa fa-check text-success text-active"></i></a><a href="#" class="btn btn-s-md btn-danger">Cancelada</a>
                        </td>
<td>#CODIGO</td>
                      </tr>
                      <tr>
                        <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td>1KLdiSkCpMUbfDXQCmaAck5cDaDX8gan21 </td>
                        <td>$ 100</td>
                        <td>Jul 15, 2013</td>
                        <td>
                          <a href="#" class="active" data-toggle="class"></a><a href="#" class="btn btn-s-md btn-success">Finalizado</a>
                        </td>
<td>#CODIGO</td>
                      </tr>
                      


                      
                      
                      
                      
                    </tbody>
                  </table>
                </div>

                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                      <select class="input-sm form-control input-s-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                      </select>
                      <button class="btn btn-sm btn-default">Apply</button>                  
                    </div>
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">                
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        
                        
                        
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="js/js2/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/js2/bootstrap.js"></script>
  <!-- App -->
  <script src="js/js2/app.js"></script>  
  <script src="js/js2/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/js2/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="js/js2/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/js2/charts/flot/jquery.flot.min.js"></script>
  <script src="js/js2/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="js/js2/charts/flot/jquery.flot.spline.js"></script>
  <script src="js/js2/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="js/js2/charts/flot/jquery.flot.resize.js"></script>
  <script src="js/js2/charts/flot/jquery.flot.grow.js"></script>
  <script src="js/js2/charts/flot/demo.js"></script>

  <script src="js/js2/calendar/bootstrap_calendar.js"></script>
  <script src="js/js2/calendar/demo.js"></script>

  <script src="js/js2/sortable/jquery.sortable.js"></script>
  <script src="js/js2/app.plugin.js"></script>
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
            </p>
  <?php endif; ?>

</body></html>	


<script type="text/javascript">



var tipo = "<?php echo $_SESSION['tipo'] ; ?>" ;

if  (tipo == "1"){
document.getElementById("cambiaAdmin").innerHTML =     "Administrador";
}
else{ document.getElementById("cambiaAdmin").innerHTML =     "Usuario"; }



</script>	