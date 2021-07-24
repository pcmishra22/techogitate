 <?php include_once('header.php');?>
 <?php
    $id=$_GET['id'];
    $str = file_get_contents('productlists.json');
    $productlistjson = json_decode($str, true);
    $product=$productlistjson[$id];
    if(!empty($_POST))
    {
        $receiving_email_address = 'pcmishra22@gmail.com';
            $to = $receiving_email_address; // this is your Email address
            $from = 'designyoursuits.com'; // this is the sender's Email address
            $name = $_POST['name'];
            $subject = 'Design your suits- order-';
            $message = json_encode($_POST);
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
    ?>                            

     <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>We have received your order. After Checking sizes, we will confirm your order via Phone. For any queries, Please use my contact no.</p>
            <hr>
            <p class="mb-0">Thanks for order.</p>
    </div>
    <?php
    }
    ?>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


 <form action="" method="post">
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="assets/img/<?php echo $product['img']?>" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2 text-success"><?php echo $product['Title']?></h1>
                            <p class="h3 py-2"><?php echo $product['Price']?></p>
                            <h6>Description:</h6>
                            <p><?php echo $product['Description']?>.</p>
                             <h6>Size Specification:</h6>
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="assets/img/measurement.jpg">
                        </div>
                            <br/>
                            <h5>Enter your size (Measurement) in Inch : For Any Query CALL OR WHATSAPP: 7340753780</h6> 

                            <br/>
                             <ul class="list-unstyled pb-3">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  
                                  <th scope="col" class=" btn-success" colspan="2">SIZE</th>
                                  <th scope="col" class=" btn-success" colspan="2"> VALUE(IN INCH)</th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                <tr> 
                                  <td width="25%"class="btn-success"><h6>SHOULDER</h6></td>
                                  <td width="25%">
                                    <input type="text" class="form-control" name="shoulder" id="shoulder" placeholder=" Shoulder ">
                                </td>
                                  <td width="25%" class="btn-success"><h6>NECK DEEP</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "neckup" id="neckdeep" placeholder=" Neck Deep "></td>
                                </tr>
                                <tr> 
                                
                                <td width="25%" class="btn-success"><h6>BUST / CHEST</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "bust" id="bust" placeholder=" Bust "></td>
                                                                  <td width="25%" class="btn-success"><h6>WAIST</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "waist" id="waist" placeholder=" Waist "></td>
                                </tr>
                                <tr>

                                  <td width="25%" class="btn-success"><h6>HIPS</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "hips" id="hips" placeholder=" Hips "></td>
                                         <td width="25%" class="btn-success"><h6>TOP LENGTH</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "toplength" id="toplength" placeholder=" Top Length "></td>
                                </tr>
                                <tr>
                           
                                  <td width="25%" class="btn-success"><h6>SLEEVE LENGTH</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "sleevelength" id="sleevelength" placeholder=" Sleeve Length "></td>
                                                                    <td width="25%" class="btn-success"><h6>BOTTON LENGTH</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "bottomlength" id="bottomlength" placeholder=" Bottom Length "></td>
                                </tr>
                                <tr>

                                  <td width="25%" class="btn-success"><h6>SALWAR BELT</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "salwarbelt" id="salwarbelt" placeholder=" Salwar Belt "></td>
                                    <td width="25%" class="btn-success"><h6>SALWAR LENGTH</h6></td>
                                  <td width="25%"><input type="text" class="form-control" name = "salwarlength" id="salwarlength" placeholder=" Salwar Length "></td>
                                </tr>
                                <tr>

                                  <td class=" btn-success"><h6>BOTTOM HOOP</h6></td>
                                  <td><input type="text" class="form-control" name = "bottomhoop" id="bottomhoop" placeholder=" Bottom Hoop Size"></td>
                                </tr>
                              </tbody>
                            </table>
                            </ul>


                           
                                <input type="hidden" name="productid" value="<?php echo $id;?>">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                <h6>Quantity</h6>
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>


                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname"><h6>Name</h6></label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail"><h6>Phone</h6></label>
                        <input type="text" class="form-control mt-1" id="phone" name="phone" placeholder="Enter your phone no">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage"><h6>Message</h6></label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Enter Message" rows="2"></textarea>
                </div>
                <div class="row pb-3">
                    <div class="col d-grid">
                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Click to complete your orrder now</button>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    <?php include_once('footer.php');?>
