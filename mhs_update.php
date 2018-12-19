<!-- ARDIAN TIRTA DIRGANTORO, TEKNIK KOMPUTER 2017 -->
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
                            <h3>SISTEM INFORMASI AKADEMIK</h3>
                            <p>Politeknik Negeri Sriwijaya</p>
                        </div>
                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">			
					
					    <div class="row">
					        <div class="col-xs-12">
					            <div class="panel">
					                <div class="panel-heading">
					                    <h3 class="panel-title">Edit Data Mahasiswa</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="pad-btm form-inline">
					                       <?php 
                                                include "db/config.php";
                                                $id = $_GET['id']; 

                                                $sql = "SELECT * FROM t_mahasiswa WHERE mhs_id = ".$id."";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_array()) {
                                           ?>
                                            <form action ="db/mhs_update.php" method = "post">
                                            <div class="row" id="mhsForm">
                                                <div class="col-sm-6 table-toolbar-left">
                                                     <div class="table-responsive">
                                                         <table class="table table-striped">
                                                            <tr>
                                                                <td>Nama</td>
                                                                <input type="hidden" name="mhs_id" id="mhs_id" value="<?php echo $row['mhs_id'] ?>">
                                                                <td><input type="text" class="form-control" name="mhs_name" id="mhs_name" value="<?php echo $row['mhs_name'] ?>"></td>
                                                             </tr>
                                                             <tr>
                                                                <td>Kelas</td>
                                                                <td><input type="text" class="form-control" name="mhs_class" id="mhs_class" value="<?php echo $row['mhs_class'] ?>"></td>
                                                             </tr>
                                                             <tr>
                                                                <td>Alamat</td>
                                                                <td><textarea class="form-control" name="mhs_address" id="mhs_address"><?php echo $row['mhs_address'] ?></textarea></td>
                                                             </tr>
                                                         </table>
					                                </div>
                                                </div>
                                                <div class="col-sm-6 table-toolbar-left">
                                                     <div class="table-responsive">
                                                         <table class="table table-striped">
                                                            <tr>
                                                                <td>Jurusan</td>
                                                                <td>
                                                                    <select class="form-control" name="mhs_major" id="mhs_major" >
                                                                        <option value="Teknik Komputer"<?php if($row['mhs_major'] == 'Teknik Komputer') { ?> selected="selected"<?php } ?>>Teknik Komputer</option>
                                                                        <option value="Manajemen Informatika"<?php if($row['mhs_major'] == 'Manajemen Informatika') { ?> selected="selected"<?php } ?>>Manajemen Informatika</option>
                                                                        <option value="Teknik Sipil"<?php if($row['mhs_major'] == 'Teknik Sipil') { ?> selected="selected"<?php } ?>>Teknik Sipil</option>
                                                                        <option value="Teknik Mesin"<?php if($row['mhs_major'] == 'Teknik Mesin') { ?> selected="selected"<?php } ?>>Teknik Mesin</option>
                                                                        <option value="Administrasi & Bisnis"<?php if($row['mhs_major'] == 'Administrasi & Bisnis') { ?> selected="selected"<?php } ?>>Administrasi & Bisnis</option>
                                                                        <option value="Akuntansi"<?php if($row['mhs_major'] == 'Akuntansi') { ?> selected="selected"<?php } ?>>Akuntansi</option>
                                                                    </select>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td>Tempat Lahir</td>
                                                                <td><input type="text" class="form-control" name="mhs_birth_place" id="mhs_birth_place" value="<?php echo $row['mhs_birth_place'] ?>"></td>
                                                             </tr>
                                                             <tr>
                                                                <td>Tanggal Lahir</td>
                                                                <td><input type="text" class="form-control" placeholder="yyyy-mm-dd" name="mhs_birth_date" id="mhs_birth_date" value="<?php echo $row['mhs_birth_date'] ?>"></td>
                                                             </tr>
                                                             
                                                              <tr>
                                                                <td></td>
                                                                <td class="text-right">
                                                                    <input type="submit" value ="Simpan" id="btnSave" class="btn btn-success">
                                                                </td>
                                                             </tr>
                                                         </table>
					                                </div>
                                                
                                                </div>
                                            </div>
                                            </form>
                                            <?php } }?>
					                    </div>
					            
					                    <hr class="new-section-xs">
                                        
                                      
					            
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
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>

    
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
