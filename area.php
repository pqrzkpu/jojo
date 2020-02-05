
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
					                    <h3 class="panel-title">Area</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="table-responsive">
					                        <table class="table table-striped" id="tBarang">
					                            <thead>
					                                <tr>
					                                    <th width="20%">Code</th>
					                                    <th>Country</th>
					                                    <th>Area ID</th>
					                                    <th>Area</th>
					                                    <th>Action</th>
					                                </tr>
					                            </thead>
					                            <tbody id="area">
					                                
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
    
<!--    <script src="js/master-barang.js"></script>-->

</body>
</html>
