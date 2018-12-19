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
					
					    <div class="row" id="printArea">
					        <div class="col-sm-12">
					            <div class="panel">
					                <div class="panel-heading">
					                    <h3 class="panel-title">Data Mahasiswa Politeknik Negeri Sriwijaya</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
                                         <div class="col-sm-12" >
                                            <?php 
                                                include "db/config.php";
                                                $id = $_GET['id']; 

                                                $sql = "SELECT * FROM t_mahasiswa WHERE mhs_id = ".$id."";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_array()) {
                                           ?>
                                             
                                                <div class="table-responsive">
                                                  <table class="table table-striped">
                                                      <tr>
                                                          <td>Nama</td>
                                                          <td>:</td>
                                                          <td><?php echo $row['mhs_name'] ?></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Kelas</td>
                                                          <td>:</td>
                                                          <td><?php echo $row['mhs_class'] ?></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Alamat</td>
                                                          <td>:</td>
                                                          <td><?php echo $row['mhs_address'] ?></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Jurusan</td>
                                                          <td>:</td>
                                                          <td><?php echo $row['mhs_major'] ?></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Tempat / Tanggal Lahir</td>
                                                          <td>:</td>
                                                          <td><?php echo $row['mhs_birth_place'] ?>, <?php echo $row['mhs_birth_date'] ?></td>
                                                      </tr>
                                                  </table>
                                               </div>
                                             </div>
                                           <?php } }?>
                                         </div>
					            
					                </div>
					                <!--===================================================-->
					                <!--End Data Table-->
					
					            </div>
					        </div>
                            <button class="btn btn-warning pull-right" onclick="print()"><i class="demo-pli-printer icon-fw"></i> Cetak</button>
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

    <script>
       
        
        /*print*/
         function print() {    
           var divToPrint = document.getElementById('printArea');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + printArea.innerHTML + '</html>');
           popupWin.document.close();
        }
    
    </script>
    

</body>
</html>
