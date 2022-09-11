
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
                                            <th> subject </th>
                                            <th> message </th>
                                            <th> action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($shw as $shw1)
                                        { ?>
                                        <tr class="odd gradeX">
                                           <td> <?php echo $shw1["cid"]; ?> </td>
                                           <td> <?php echo $shw1["name"]; ?> </td>
                                           <td> <?php echo $shw1["email"]; ?> </td>
                                           <td> <?php echo $shw1["subject"]; ?> </td>
                                           <td> <?php echo $shw1["message"]; ?> </td>
                                           <td>  <a href="<?php echo $mainurl; ?>manege?delid=<?php echo $shw1["cid"]; ?>"  onclick="return confirm('are you sure to delete this daata')" title="click to delete data" >    <i class="bi bi-trash text-danger"></i> </a>  </td>
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
