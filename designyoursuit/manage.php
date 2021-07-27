 <?php 
    include_once('header.php');
    if(!empty($_POST))
    {
        if($_POST['user']=='kartik' && $_POST['password']=='kartik')
            header("Location: listproducts.php");
        else
            echo 'INVALID USER AND PASSWORD.';
    }
    ?>
        <form action="" method="post">
           <!-- Start Contact -->
            <div class="container py-5">
                <div class="row py-5">
                    <form class="col-md-9 m-auto" method="post" role="form">
                        <div class="row">

                            <div class="form-group col-md-12 mb-3">
                                <label for="inputemail">User</label>
                                <input type="text" class="form-control mt-1" id="user" name="user" placeholder="user">
                            </div>

                            <div class="form-group col-md-12 mb-3">
                                <label for="inputemail">Password</label>
                                <input type="password" class="form-control mt-1" id="password" name="password" placeholder="password">
                            </div>
                        </div>
                         <div class="form-group col-md-12 mb-3">
                          
                                <button type="submit" class="btn btn-success btn-lg px-12">Submit</button>
                          
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Contact -->
        </form>
    <?php include_once('footer.php');?>
