<!DOCTYPE php>
<php lang="en">
    <?php
    include "include/auth.php";
    include "include/config.php";
    require_once "include/website_body.class.php";
    require_once "include/product.class.php";
    require_once "process/save.class.php";
    $body = new website_body();
    $item = new product();
    $saveProduct = new save();
    $branch = $_SESSION['branch'];
    $name = $_SESSION['name'];
    $designation = $_SESSION['designation'];
    $productId = $_GET['id'];
    $productDetails = $item->product_detail($con, $productId);
    ?>

    <head>
        <?php echo $body->head(); ?>
        <title>CREMPCO Giant Store</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/upload-img.css">
        <link rel="stylesheet" href="css/product.css">
    </head>

    <body>

        <?php echo $body->navigation($name, $designation) ?>

        <!--================ Start Main Content Area  =================-->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <hr style="border-color:#000">
                    <h1>Edit Product</h1>
                    <hr style="border-color:#000">
                    <div class="add-product">
                        <!--================ Start Upload Image Area  =================-->

                        <div class="upload-container">
                            <div class="upload-btn-wrapper">
                                <button class="btn">Upload an Image</button>
                                <form action="" method="post" enctype="multipart/form-data" id="save">
                                    <input form="save" name="image" id="image" type="file" accept="image/*"
                                        onchange="previewImage(event)">
                            </div>
                            <div class="preview">
                                <img id="preview-img" src="../<?php echo $productDetails['img_dir'] ?>"
                                    alt="Image Preview" style="display:;">
                            </div>
                        </div>
                        <!--================ End Upload Image Area  =================-->

                        <!--================ Start Product Information Area  =================-->
                        <div class="name">
                            <label for="name" style="">Product Name</label>
                            <input form="save" type="text" class="form-control" name="name" id="name"
                                placeholder="Product Name" style="width: 400px;"
                                value="<?php echo $productDetails['product_name'] ?>">
                        </div>

                        <div class="quantity">
                            <label for="quantity" style="">Quantity<span style="color:red;">*</span></label>
                            <input form="save" type="number" class="form-control" name="quantity" id="quantity"
                                placeholder="QTY:" style="width: 70px;"
                                value="<?php echo $productDetails['quantity'] ?>">
                        </div>

                        <div class="price">
                            <label for="price" style="">Price<span style="color:red;">*</span></label>
                            <input form="save" type="text" class="form-control" name="price" id="price"
                                placeholder="Price:" oninput="validateInput(this)" style=""
                                value="<?php echo $productDetails['price'] ?>">
                        </div>
                    </div>

                    <br>
                    <div class="desc">
                        <h6>Description<span style="color:red;">*</span></h6>
                        <textarea form="save" class="form-control" name="desc" id="desc"
                            placeholder="Enter Product Description"
                            style="height:250px;"><?php echo $productDetails['description'] ?></textarea>
                    </div>
                    <!--================ End Product Information Area  =================-->
                    <hr style="border-color:#000">
                    <h4>Product Specification</h4>
                    <hr style="border-color:#000">

                    <div class="add-product">

                        <div>
                            <label for="category" style="">Category<span style="color:red;">*</span></label>
                            <br>
                            <select form="save" class="form-control" name="category" id="category">
                                <option value="" disabled selected><?php echo $productDetails['category_name'] ?>
                                </option>
                                <?php $item->category($con); ?>
                            </select>
                        </div>

                        <div id="subcategory" style="margin-left:40px;">
                            <label for="category" style="">Sub Category</label>
                            <br>
                            <select class="form-control" name="" id="">
                                <option value="" disabled selected><?php echo $productDetails['sub_category_name'] ?>
                                </option>
                            </select>
                        </div>
                        <div id="" style="margin-left:40px;">
                            <label for="" style="">Width</label>
                            <br>
                            <input form="save" type="text" class="form-control" name="width" id="width" placeholder=""
                                style="width: 100px;" value="<?php echo $productDetails['width']; ?>">
                        </div>

                        <div id="" style="margin-left:40px;">
                            <label for="" style="">Height</label>
                            <br>
                            <input form="save" type="text" class="form-control" name="height" id="height" placeholder=""
                                style="width: 100px;" value="<?php echo $productDetails['height'] ?>">
                        </div>

                    </div>
                    <br>
                    <div class="add-product">
                        <div id="" style="">
                            <label for="" style="">Depth</label>
                            <br>
                            <input form="save" type="text" class="form-control" name="depth" id="depth" placeholder=""
                                style="width: 100px;" value="<?php echo $productDetails['depth'] ?>">
                        </div>

                        <div id="" style="margin-left:40px;">
                            <label for="" style="">Weight</label>
                            <br>
                            <input form="save" type="text" class="form-control" name="weight" id="weight" placeholder=""
                                style="width: 100px;" value="<?php echo $productDetails['weight'] ?>">
                        </div>

                        <div id="" style="margin-left:40px;">
                            <label for="" style="">Quality Checking</label>
                            <br>
                            <select form="save" class="form-control" name="quality" id="quality">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                        <div id="" style="margin-left:40px;">
                            <label for="" style="">Estimate Delivery</label>
                            <br>
                            <input form="save" type="text" class="form-control" name="delivery" id="delivery"
                                placeholder="" style="width: 100px;"
                                value="<?php echo $productDetails['Estimate Delivery'] ?>">
                        </div>

                        <div id="" style="margin-left:40px;">
                            <label for="" style="">Returnable/Refundable</label>
                            <br>
                            <select form="save" class="form-control" name="return" id="return">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <hr style="border-color:#000">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                    <hr style="border-color:#000">
                </div>
            </div>
        </section>
        <!--================ End  Main Content Area  =================-->

        <!--================ Start footer Area  =================-->
        <footer class="footer">
            <?php echo $body->footer() ?>
        </footer>
        <!--================ End footer Area  =================-->



        <?php
        $item->show_product($con);
        echo $body->script()
            ?>
    </body>

    </html>