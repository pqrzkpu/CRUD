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
					                    <h3 class="panel-title">Data Mahasiswa</h3>
					                </div>
					
					                <!--Data Table-->
					                <!--===================================================-->
					                <div class="panel-body">
					                    <div class="pad-btm form-inline">
					                        <div class="row">
					                            <div class="col-sm-6 table-toolbar-left">
					                                <button class="btn btn-purple" onclick="showForm()"><i class="demo-pli-add icon-fw"></i>Tambah</button>
					                            </div>
					                        </div>
                                            
                                            <form action ="db/mhs_create.php" method = "post">
                                            <div class="row" id="mhsForm" style="display:none;">
                                                <div class="col-sm-6 table-toolbar-left">
                                                     <div class="table-responsive">
                                                         <table class="table table-striped">
                                                            <tr>
                                                                <td>Nama</td>
                                                                <td><input type="text" class="form-control" name="mhs_name" id="mhs_name"></td>
                                                             </tr>
                                                             <tr>
                                                                <td>Kelas</td>
                                                                <td><input type="text" class="form-control" name="mhs_class" id="mhs_class"></td>
                                                             </tr>
                                                             <tr>
                                                                <td>Alamat</td>
                                                                <td><textarea class="form-control" name="mhs_address" id="mhs_address"></textarea></td>
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
                                                                    <select class="form-control" name="mhs_major" id="mhs_major">
                                                                        <option>Teknik Komputer</option> 
                                                                        <option>Manajemen Informatika</option> 
                                                                        <option>Teknik Sipil</option> 
                                                                        <option>Teknik Mesin</option> 
                                                                        <option>Administrasi & Bisnis</option> 
                                                                        <option>Akuntansi</option> 
                                                                    </select>
                                                                </td>
                                                             </tr>
                                                             <tr>
                                                                <td>Tempat Lahir</td>
                                                                <td><input type="text" class="form-control" name="mhs_birth_place" id="mhs_birth_place"></td>
                                                             </tr>
                                                             <tr>
                                                                <td>Tanggal Lahir</td>
                                                                <td><input type="text" class="form-control" placeholder="yyyy-mm-dd" name="mhs_birth_date" id="mhs_birth_date"></td>
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
                                            
					                    </div>
					                    <div class="table-responsive">
					                        <table class="table table-striped">
					                            <thead>
					                                <tr>
					                                    <th>Nama</th>
					                                    <th>Kelas</th>
					                                    <th>Alamat</th>
					                                    <th>Jurusan</th>
					                                    <th>Tempat / Tanggal Lahir</th>
					                                    <th class="text-center">Aksi</th>
					                                </tr>
					                            </thead>
					                            <tbody>
                                                    <?php
                                                        include 'db/config.php';

                                                        $sql = "SELECT * FROM t_mahasiswa";
                                                        $result = $conn->query($sql); 
                                                        
                                                        while($row = mysqli_fetch_array($result))
                                                        {
                                                            echo '<tr>';
                                                            echo '<td>' . $row['mhs_name'] . '</td>';
                                                            echo '<td>' . $row['mhs_class'] . '</td>';
                                                            echo '<td>' . $row['mhs_address'] . '</td>';
                                                            echo '<td>' . $row['mhs_major'] . '</td>';
                                                            echo '<td>' . $row['mhs_birth_place'] . ' / ' . $row['mhs_birth_date'] . '</td>';
                                                            echo '<td>
                                                                    <a href="mhs_update.php?id='.$row['mhs_id'].'"><button class="btn btn-success"><i class="demo-pli-pencil icon-fw"></i></button></a>
                                                                    <a href="db/mhs_delete.php?id='.$row['mhs_id'].'"><button class="btn btn-danger"><i class="demo-pli-remove icon-fw"></i></button></a>
                                                                    <a href="mhs_print.php?id='.$row['mhs_id'].'" ><button class="btn btn-warning"><i class="demo-pli-printer icon-fw"></i></button></a>
                                                                  </td>';
                                                            echo '</tr>';
                                                    
                                                        }
                                                    ?>
                                                        
                                                 
					                            </tbody>
					                        </table>
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

    <script>
        /*show hide form*/
        function showForm() {
            var x = document.getElementById("mhsForm");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        
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
