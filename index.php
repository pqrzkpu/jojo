
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
                <div id="page-head">
                    
                        <div class="pad-all text-center">
                            <h3>Hello</h3>
                            <p>The Manager, King Salmon <i class="demo-pli-smile"></i></p>
                        </div>
                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					    <div class="row">
					        <div class="col-lg-7">
					
					            <!--Network Line Chart-->
					            <!--===================================================-->
					            <div id="demo-panel-network" class="panel">
					                <div class="panel-heading">
					                    <div class="panel-control">
					                        <button id="demo-panel-network-refresh" class="btn btn-default btn-active-primary" data-toggle="panel-overlay" data-target="#demo-panel-network"><i class="demo-psi-repeat-2"></i></button>
					                        
					                    </div>
					                    <h3 class="panel-title">League History</h3>
					                </div>
					
					
					                <!--chart placeholder-->
					                <div class="pad-all">
					                    <div id="demo-chart-network" style="height: 255px"></div>
					                </div>
					
					
					                <!--Chart information-->
					                <div class="panel-body">
					
					                    <div class="row">
					                        <div class="col-lg-8">
					                            <p class="text-semibold text-uppercase text-main">Match</p>
					                            <div class="row">
					                                <div class="col-xs-5">
					                                    <div class="media">
					                                        <div class="media-left">
					                                            <span class="text-3x text-thin text-main">43</span>
					                                        </div>
					                                        <div class="media-body">
					                                            <p class="mar-no"></p>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="col-xs-7 text-sm">
					                                    <p>
					                                        <span>Lose</span>
					                                        <span class="pad-lft text-semibold">
					                                        <span class="text-lg">27°</span>
					                                        <span class="labellabel-success mar-lft">
					                                            <i class="pci-caret-down text-success"></i>
					                                            <smal>- 20</smal>
					                                        </span>
					                                        </span>
					                                    </p>
					                                    <p>
					                                        <span>Win</span>
					                                        <span class="pad-lft text-semibold">
					                                        <span class="text-lg">69°</span>
					                                        <span class="labellabel-danger mar-lft">
					                                            <i class="pci-caret-up text-danger"></i>
					                                            <smal>+ 57</smal>
					                                        </span>
					                                        </span>
					                                    </p>
					                                </div>
					                            </div>
					
					                            <hr>
					
					                            <div class="pad-rgt">
					                                <p class="text-semibold text-main">Next Match,</p>
					                                <p class="text-muted mar-top">Saturday, February 08 2020 <i class="demo-pli-happy"></i></p>
					                            </div>
					                        </div>
					
					                        <div class="col-lg-4">
					                            <p class="text-uppercase text-semibold text-main">Income</p>
					                            <ul class="list-unstyled">
					                                <li>
					                                    <div class="media pad-btm">
					                                        <div class="media-left">
					                                            <span class="text-2x text-thin text-main">754,900</span>
					                                        </div>
					                                        <div class="media-body">
					                                            <p class="mar-no">$</p>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li class="pad-btm">
					                                    <div class="clearfix">
					                                        <p class="pull-left mar-no">Income</p>
					                                        <p class="pull-right mar-no">70%</p>
					                                    </div>
					                                    <div class="progress progress-sm">
					                                        <div class="progress-bar progress-bar-info" style="width: 70%;">
					                                            <span class="sr-only">70% Complete</span>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="clearfix">
					                                        <p class="pull-left mar-no">Outcome</p>
					                                        <p class="pull-right mar-no">10%</p>
					                                    </div>
					                                    <div class="progress progress-sm">
					                                        <div class="progress-bar progress-bar-primary" style="width: 10%;">
					                                            <span class="sr-only">10% Complete</span>
					                                        </div>
					                                    </div>
					                                </li>
					                            </ul>
					                        </div>
					                    </div>
					                </div>
					
					
					            </div>
					            <!--===================================================-->
					            <!--End network line chart-->
					
					        </div>
					        <div class="col-lg-5">
					            <div class="row">
					                <div class="col-sm-6 col-lg-6">
					
					                    <!--Sparkline Area Chart-->
					                    <div class="panel panel-success panel-colorful">
					                        <div class="pad-all">
					                            <p class="text-lg text-semibold"><i class="pli-tomato icon-fw"></i> Asia</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">32</span> Competition
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">4</span> Win
					                            </p>
					                        </div>
					                        <div class="pad-top text-center">
					                            <!--Placeholder-->
					                            <div id="demo-sparkline-area-sayur" class="sparklines-full-content"></div>
					                        </div>
					                    </div>
					                </div>
					                <div class="col-sm-6 col-lg-6">
					
					                    <!--Sparkline Line Chart-->
					                    <div class="panel panel-info panel-colorful">
					                        <div class="pad-all">
                                                <p class="text-lg text-semibold"><i class="pli-fruits icon-fw"></i>Europe</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">42</span> Competition
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">5</span> Win
					                            </p>
					                        </div>
					                        <div class="pad-top text-center">
					
					                            <!--Placeholder-->
					                            <div id="demo-sparkline-area-buah" class="sparklines-full-content"></div>
					
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="row">
					                <div class="col-sm-6 col-lg-6">
					
					                    <!--Sparkline bar chart -->
					                    <div class="panel panel-danger panel-colorful">
					                        <div class="pad-all">
					                            <p class="text-lg text-semibold"><i class="pli-bread icon-fw"></i> Africa</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">34</span> Competition
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">3</span> Win
					                            </p>
					                        </div>
					                        <div class="text-center">
					
					                            <!--Placeholder-->
					                            <div id="demo-sparkline-area-bumbu" class="box-inline"></div>
					
					                        </div>
					                    </div>
					                </div>
					                <div class="col-sm-6 col-lg-6">
					
					                    <!--Sparkline pie chart -->
					                    <div class="panel panel-purple panel-colorful">
					                        <div class="pad-all">
                                                <p class="text-lg text-semibold"><i class="pli-eggs icon-fw"></i>America</p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">34</span> Competition
					                            </p>
					                            <p class="mar-no">
					                                <span class="pull-right text-bold">2</span> Win
					                            </p>
					                        </div>
					                        <div class="text-center">
					
					                            <!--Placeholder-->
					                            <div id="demo-sparkline-area-lauk" class="box-inline"></div>
					
					                        </div>
					                    </div>
					                </div>
					            </div>
					
					
					            <!--Extra Small Weather Widget-->
					            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					            <div class="panel">
					                <div class="panel-body text-center clearfix">
					                    <div class="col-sm-4 pad-top">
					                        <div class="text-lg">
					                            <p class="text-5x text-thin text-main">95</p>
					                        </div>
					                        <p class="text-sm text-bold text-uppercase">Stadium</p>
					                    </div>
					                    <div class="col-sm-8">
					                        <button class="btn btn-pink mar-ver">View Details</button>
					                        <p class="text-xs">Allianz Arena <i class="pli-chef-hat"></i></p>
					                        <ul class="list-unstyled text-center bord-top pad-top mar-no row">
					                            <li class="col-xs-4">
					                                <span class="text-lg text-semibold text-main">75,000</span>
					                                <p class="text-sm text-muted mar-no">Capacity</p>
					                            </li>
					                            <li class="col-xs-4">
					                                <span class="text-lg text-semibold text-main">Grass</span>
					                                <p class="text-sm text-muted mar-no">Surface</p>
					                            </li>
					                            <li class="col-xs-4">
					                                <span class="text-lg text-semibold text-main">Good</span>
					                                <p class="text-sm text-muted mar-no">Condition</p>
					                            </li>
					                        </ul>
					                    </div>
					                </div>
					            </div>
					
					            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					            <!--End Extra Small Weather Widget-->
					
					
					        </div>
					    </div>
					
					    <div class="row">
					        <div class="col-md-3">
					            <div class="panel panel-success panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="pli-tomato icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">132</p>
					                    <p class="mar-no">Asia</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-info panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="pli-fruits icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">764</p>
					                    <p class="mar-no">Europe</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-danger panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="pli-bread icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">64</p>
					                    <p class="mar-no">Africa</p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-3">
					            <div class="panel panel-purple panel-colorful media middle pad-all">
					                <div class="media-left">
					                    <div class="pad-hor">
					                        <i class="pli-eggs icon-3x"></i>
					                    </div>
					                </div>
					                <div class="media-body">
					                    <p class="text-2x mar-no text-semibold">34</p>
					                    <p class="mar-no">America</p>
					                </div>
					            </div>
					        </div>
					
					    </div>
					
					    <div class="row">
					        <div class="col-xs-12">
					            <div class="panel">
					                <div class="panel-heading">
					                    <h3 class="panel-title">Competition Status</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="table-responsive">
					                        <table class="table table-striped">
					                            <thead>
					                                <tr>
					                                    <th>Country</th>
					                                    <th>Competition</th>
					                                    <th>Plan</th>
					                                    <th>Season Start Date</th>
					                                    <th>Season End Date</th>
					                                    <th class="text-center">Available Season</th>
					                                    <th class="text-center">Current Match</th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                                <tr>
					                                    <td><a href="#" class="btn-link">Africa</a></td>
					                                    <td>WC Qualification</td>
					                                    <td><span class="text-muted">WC Qualification</span></td>
					                                    <td>2019-09-04</td>
					                                    <td>2021-11-16</td>
					                                    <td class="text-center">2</td>
					                                    <td class="text-center">0</td>
					                                    
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
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>




    <!--=================================================-->
    
    <!--Flot Chart [ OPTIONAL ]-->
    <script src="plugins/flot-charts/jquery.flot.min.js"></script>
	<script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>
	<script src="plugins/flot-charts/jquery.flot.tooltip.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="js/demo/dashboard.js"></script>


    

</body>
</html>
