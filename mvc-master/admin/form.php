
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Basic Form Examples</h3>
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 <style>
                                    .form-control
                                    {
                                        width: 80%;
                                    }
                                 </style>
                                 
                                 
                                 
                                 
                                 
                                    <form  id="bv" method="POST" enctype="multipart/form-data" role="form">
                                        <div class="form-group">
                                            <label>  name  </label>
                                            <input name="name" class="form-control" placeholder="name*" data-bvalidator="required" />
                                        </div>
                                        <div class="form-group">
                                            <label> email </label>
                                            <input name="email" class="form-control" placeholder="PLease Enter Keyword" data-bvalidator="required" />
                                        </div>

                                        


                                        <div class="form-group" >
                                            <label > images</label>
                                            <input  name="img" class="form-control" placeholder="image"     type="file"  data-bvalidator="required" >
                                        </div>



                                        <div class="form-group">
                                            <label for=""> state </label>
                                            <select name="state" id="" class="form-control" data-bvalidator="required" >
                                            <option value="">select state</option>


                                            <?php  
                                            foreach($st as $st1)
                                            {?>

                                            <option value="<?php echo $st1["sid"]; ?>"> <?php echo $st1["sname"]; ?>  </option>
                                            <?php } ?>


                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for=""> city </label>
                                        <select name="city" id="" class="form-control" data-bvalidator="required" >

                                        <option value=""> select city</option>

                                        <?php 
                                        foreach($ct as $ct1)
                                        {
                                        
                                        ?>

                                        <option value="<?php echo $ct1["cid"] ?>"> <?php echo $ct1["cname"]  ?> </option>

                                        <?php 
                                        }
                                        ?>


                                        </select>

                                            
                                         </div>
                                    
                                       
                                        
                                        <button name="pro" type="submit" class="btn btn-primary"> submit </button>
                                        <button type="reset" class="btn btn-success">Reset Button</button>

                                    </form>





























                                    <br />
                                      
                                    <form>

                                    </form>

                                 
    </div>
                                
                                <div class="col-md-6">
                                    
                                  <div class="input-group">
   
    </div>
<br />
        
                                         </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
