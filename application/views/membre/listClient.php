<?php //include("dashboard.php"); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">LISTE DE VOS CLIENTS  </h1>
                    </div>


                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
         
     <h2 style= "text-align:center">Vos clients </h2>
  <br> </br>            

<div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left">
                        <span class="glyphicon glyphicon-user glyphicon-lg"></span>
                    </div>
                            <?php
                foreach ($client as $item) {
                $lien = site_url("client/espaceClient/$item->idClient");
                        
                    <h5><a href=$lien>$item->nom_client</h5></a>
                    <h4>$item->prenom_client</h4>
                    <p>$item->rue_client</p>
                    <span>$item->ville_client</span>
                    <span>$item->CP_client</span>
                </div>
            </div>
            EOT;
}
?>  
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
-
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
