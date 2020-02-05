
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
					                    <h3 class="panel-title">Master Petani</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="pad-btm form-inline">
					                        <div class="row">
					                            <div class="col-sm-6 table-toolbar-left">
					                                <button class="btn btn-purple" data-toggle="modal" data-target="#addBarang"><i class="demo-pli-add icon-fw"></i>Tambah</button>
					                                <button class="btn btn-default"><i class="demo-pli-printer icon-lg"></i></button>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="table-responsive">
					                        <table class="table table-striped" id="tBarang">
					                            <thead>
					                                <tr>
					                                    <th width="20%">User ID</th>
					                                    <th>Nama Petani</th>
					                                    <th>Alamat</th>
					                                    <th>Kontak</th>
					                                    <th>Aksi</th>
					                                </tr>
					                            </thead>
					                            <tbody id="petani">
					                                
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

    <!-- Modal -->
    <div id="addBarang" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Barang</h4>
            </div>
            <div class="modal-body">
                <div class="panel">
				    <form enctype="multipart/form-data" id="fBarang" >
                        <div class="panel-body">
                            <div class="row">
					            <div class="col-sm-6">
					                <div class="form-group">
                                        <label class="control-label">Kategori</label>
					                    <select class="form-control" id="groupBarang" name="group_brg" onchange="getIdBarang(this);"></select>
					                </div>
					            </div>
					            <div class="col-sm-6">
					                <div class="form-group">
                                        <label class="control-label">Nama Barang</label>
					                    <input type="text" class="form-control" id="nama_brg" name="nama_brg">
					                </div>
					            </div>
					        </div>
					        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Harga Beli</label>
					                    <input type="number" class="form-control" id="hbeli_brg" name="hbeli_brg">
					                </div>
					            </div>
					            <div class="col-sm-6">
					                <div class="form-group">
                                        <label class="control-label">Harga Jual</label>
					                    <input type="number" class="form-control" id="hjual_brg" name="hjual_brg">
					                </div>
					            </div>
					        </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Stok</label>
					                    <input type="number" class="form-control" id="stok_brg" name="stok_brg">
					                </div>
					            </div>
					            <div class="col-sm-6">
					                <div class="form-group">
                                        <label class="control-label">Unggah Gambar</label>
					                    <input type="file" class="form-control" id="file" name="file">
					                </div>
					            </div>
					        </div>
					    </div>
                        <input type="submit" value="Simpan" class="btn btn-success pull-right" id=submitBtn name="submit"><br>
				    </form>
                </div>
            </div>
            
          </div>
          
      </div>
    </div>
    
    
        <!-- Modal -->
    <div id="editBarang" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ubah Data Barang</h4>
            </div>
            <div class="modal-body">
                <div class="panel">
				    <form enctype="multipart/form-data" id="fBarangEdit">
                        <div class="panel-body">
                            <div class="row">
					            <div class="col-sm-6">
					                <div class="form-group" style="display:none">
                                        <label class="control-label">ID</label>
					                    <input type="text" class="form-control" name="id_brg_edit" id="id_brg_edit">
					                </div>
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
					                    <input type="text" class="form-control" name="nama_brg_edit" id="nama_brg_edit" disabled>
					                </div>
                                    <div class="form-group">
                                        <label class="control-label">Harga Beli</label>
					                    <input type="number" class="form-control" name="hbeli_brg_edit" id="hbeli_brg_edit">
					                </div>
                                    <div class="form-group">
                                        <label class="control-label">Harga Jual</label>
					                    <input type="number" class="form-control" name="hjual_brg_edit" id="hjual_brg_edit">
					                </div>
                                    <div class="form-group">
                                        <label class="control-label">Stok</label>
					                    <input type="number" class="form-control" name="stok_brg_edit" id="stok_brg_edit">
					                </div>
					            </div>
					            <div class="col-sm-6">
					                <div class="form-group">
                                        <span id="photo_brg_edit"></span>
					                </div>
<!--
                                    <div class="form-group">
					                    <input type="file" class="form-control" name="file">
					                </div>
-->
					            </div>
					        </div>
					    </div>
                        <input type="submit" value="Ubah" class="btn btn-success pull-right" id=submitEditBtn name="submitEdit"><br>
				    </form>
                </div>
            </div>
          </div>
          
      </div>
    </div>
    
    
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
    
    <script src="js/master-petani.js"></script>

</body>
</html>
