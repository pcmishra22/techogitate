    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
    <?php
        $str = file_get_contents('productlists.json');
        $productlistjson = json_decode($str, true);
        if(count($productlistjson)>0)
        {
            foreach($productlistjson as $product)
            {
            ?>

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <a class="text-white" href="shop-single.php?id=<?php echo $product['Id']?>">
                                    <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $product['img']?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $product['Title']?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>S/M/L/X/XL/XXL/XXXL</li>

                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                        <i class="text-muted fa fa-star"></i>
                                    </li>
                                </ul>
                                <p class="text-center mb-0"><?php echo $product['Price']?></p>
                            </div>
                        </div>
                    </div>
                    

    <!-- End Content -->
            <?php
            }
        }
        else
        {
            echo 'No Product Available.';
        }

    ?>

                </div>
            </div>

        </div>
    </div>