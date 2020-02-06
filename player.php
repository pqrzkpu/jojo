
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
					                    <h3 class="panel-title">Player</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="table-responsive">
					                        <table class="table table-striped" id="player">
					                            <thead>
					                                <tr>
					                                    <th>Name</th>
					                                    <th>DOB</th>
					                                    <th>Country of Birth</th>
					                                    <th>Nationality</th>
					                                    <th>Position</th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                               <tr v-for="players in player">
                                                        <td>{{players.name}}</td>
                                                        <td>{{players.dateOfBirth}}</td>
                                                        <td>{{players.countryOfBirth}}</td>
                                                        <td>{{players.nationality}}</td>
                                                        <td>{{players.position}}</td>
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
    
    <script src="js/player.js"></script>

</body>
</html>
