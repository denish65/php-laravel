
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
                 <style>
                    .m
                    {
                        font-size: 20px;
                    }
                 </style>




            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th> id </th>
                                            <th> name </th>
                                            <th> email </th>
                                            <th> images </th>
                                            <th> state   </th>
                                            <th> city    </th>
                                            <th>  Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($shd as $shd1)
                                        { ?>
                                        <tr class="odd gradeX">
                                           <td> <?php echo $shd1["did"]; ?> </td>
                                           <td> <?php echo $shd1["name"]; ?> </td>
                                           <td> <?php echo $shd1["email"]; ?> </td>
                                           <td> <img src="<?php echo $shd1["images"]; ?>" alt="" width="150px" height="150px"   > </td>
                                           <td> <?php echo $shd1["sid"]; ?> </td>
                                           <td> <?php echo $shd1["cid"]; ?> </td>
                                           <td>   <a href="<?php  echo $mainurl; ?>manegedata?deldata=<?php echo $shd1["did"]; ?>"   title="click to deletwe data" onclick="return confirm('are you sur to delet this data')" > <i class="bi bi-trash text-danger m"></i> </a> 
                                        
                                           
                                        
                                        </td>
                                           
                                    
                                    
                                         </tr>
                                        <?php

                                        }
                                        ?>
                                       
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
              
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- <script src="assets/js/jquery-1.10.2.js"></script> -->
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
