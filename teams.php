
<!DOCTYPE html>
<html lang="en">


<?php include('pages-head.html'); ?>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <?php include('pages-header.html'); ?>
        
        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
					
					    <div class="row">
					        <div class="col-xs-12">
					            <div class="panel">
					                <div class="panel-heading">
					                    <h3 class="panel-title">Team</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="table-responsive">
					                        <table class="table table-striped" id="teams">
					                            <thead>
					                                <tr>
					                                    <th>Name</th>
					                                    <th>Address</th>
					                                    <th>Phone</th>
					                                    <th>Website</th>
					                                    <th>Email</th>
					                                    <th>Founded</th>
					                                    <th width="10%">Club Color</th>
					                                    <th>Venue</th>
					                                    <th>Player</th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                               <tr v-for="team in teams.teams">
                                                        <td>{{team.name}}</td>
                                                        <td>{{team.address}}</td>
                                                        <td>{{team.phone}}</td>
                                                        <td>{{team.website}}</td>
                                                        <td>{{team.email}}</td>
                                                        <td>{{team.founded}}</td>
                                                        <td>{{team.clubColors}}</td>
                                                        <td>{{team.venue}}</td>
                                                       <td><a class="btn-sm btn-purple mar-ver" href="player.php">Detail</a></td>
                                                   </tr> 
					                            </tbody>
					                        </table>
					                    </div>
					                    
					                   
					                </div>
					                <!--===================================================-->
					                <!--End Data Table-->
					            </div>
					        </div>
					    </div>
					
					
					    
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            

            <?php include('pages-aside.html') ?>

            
            <?php include('pages-navigator.html') ?>

        </div>

        
         <?php include('pages-footer.html') ?>
        


       
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>


    <!--=================================================-->
    
    <!--Sparkline [ OPTIONAL ]-->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!--datatables-->
    <script src="assets/datatables/js/jquery.dataTables.min.js"></script> 
    <script src="assets/datatables/js/dataTables.bootstrap4.js"></script> 
    <script src="assets/datatables/js/dataTables.responsive.min.js"></script> 
<!--    <script type="text/javascript" language="javascript" src="assets/js/dataTables.buttons.min.js"></script>-->
    
    <script src="js/teams.js"></script>

</body>
</html>
