<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APS WEB / Mon Profil</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">APS Serv</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                               
                            </a>
                        </li>
                       
                        <li class="divider"></li>
                  
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            
                        </li>

                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                       
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                             
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Mon profils</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Se déconnecter</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                          <li>
                            <a href="<?php echo site_url("Referent/monprofil")?>" ><i class="fa fa-table fa-fw"></i> Mon profil</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("Lier/myContacts")?>" ><i class="fa fa-dashboard fa-fw"></i> Mes contacts</a>
                        </li>

                        <li>
                            <a href="<?php echo site_url("#")?>" ><i class="fa fa-wrench fa-fw"></i> APS Service<span class="fa arrow"></span></a>
                           
                        </li>
                        
                        
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


          
                            <div class="box-content">
                                
                                <div class="form-group">


     <h2 style= "text-align:center">Mes informations</h2>
  <br> </br>            

<div class="box-content no-padding">
                <div class="row-fluid centered">
                    <div class="col-sm-12"><h4> Nom : <?php echo $referent[0]->nomRef; ?></h4></div>
                    <div class="col-sm-12"><h4> Prénom : <?php echo $referent[0]->prenomRef; ?></h4></div>
                    <div class="col-sm-12"><h4> Rue : <?php echo $referent[0]->rueRef; ?></h4></div>
                    <div class="col-sm-12"><h4> Ville : <?php echo $referent[0]->villeRef ?></h4></div>
                    <div class="col-sm-12"><h4> Code Postal: <?php echo $referent[0]->CPRef ?></h4></div>
                    <div class="col-sm-12"><h4> Date de naissance : <?php echo $referent[0]->ddnRef ?></h4></div>
                    <div class="col-sm-12"><h4> Adresse mail : <?php echo $referent[0]->mailRef ?></h4></div>
                                        
                    <div class="col-sm-12"><h4> Numéro de téléphone : <?php echo $referent[0]->numeroTel ?></h4></div>
                    <div class="clearfix"></div>
                </div>
<br> </br> 
<h4 style= "text-align:left">Si vous le souhaitez ,vous pouvez modifier ces informations plus bas</h4>
  <br> </br>            

<?php echo form_open('Referent/saveUpdates'); ?>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>ICI</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nom :</label>
            <div class="col-sm-10">
              <input type="text" name="Nom" class="form-control" value=<?php echo $referent[0]->nomRef; ?>>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Prénom</label>
            <div class="col-sm-10">
              <input type="text" name="Prenom" class="form-control" value=<?php echo $referent[0]->prenomRef; ?>>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Rue</label>
            <div class="col-sm-10">
              <input type="text" name="rue" class="form-control" value=<?php echo $referent[0]->rueRef; ?> >
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Ville</label>
            <div class="col-sm-4">
              <input type="text" name="ville" class="form-control" value=<?php echo $referent[0]->villeRef ?> >
            </div>

            <label class="col-sm-2 control-label" for="textinput">Code Postal</label>
            <div class="col-sm-4">
              <input type="float" name="cp" class="form-control" value=<?php echo $referent[0]->CPRef ?>>
            </div>
          </div>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Date de naissance</label>
            <div class="col-sm-10">
              <input type="text"name="ddn" class="form-control" value=<?php echo $referent[0]->ddnRef ?>>
            </div>
          </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Adresse mail</label>
            <div class="col-sm-10">
              <input type="text"name="mail" class="form-control" value=<?php echo $referent[0]->mailRef ?>>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Numéro de téléphone</label>
            <div class="col-sm-10">
              <input type="text"name="num" class="form-control" value=<?php echo $referent[0]->numeroTel ?>>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="clear" class="btn btn-default">Effacer tout </button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->






             <div id="footer">
      <div class="container ">
        <p class="footer-block"  style="text-align:center;" style="color:Grey"><strong>   Projet Web - IG3 Polytech - LAMHAOUAR  &copy;</strong></p>  
      </div>
    </div>
</body>
</html>