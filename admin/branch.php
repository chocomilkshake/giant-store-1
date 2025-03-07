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
    $saveProduct->add_branch($con);
    $name = $_SESSION['name'];
    $designation = $_SESSION['designation'];
    ?>

    <head>
        <?php echo $body->head(); ?>
        <title>CREMPCO Giant Store</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sidebar.css">
        <link rel="stylesheet" href="css/pop-up.css">
    </head>

    <body>
        <!--================ Start Navigation Area  =================-->
        <?php echo $body->navigation($name,$designation) ?>
        <!--================ End Navigation Area  =================-->

        <!--================ Start Main Content Area  =================-->
        <section class="section-margin calc-60px">
            <div class="container">
                <div class="section-intro pb-60px">
                    <table class="table">
                        <thead>
                            <tr>
                                <a href="#" class="btn btn-primary" id="add-branch-btn">Add Branch</a>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>City</th>
                                <th>Region</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table content goes here -->
                            <?php $item->branchlist($con)?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!--================ End  Main Content Area  =================-->

        <!-- Pop-up Overlay -->
        <div class="popup-overlay" id="popup-overlay"></div>

        <!-- Add Branch Pop-up Form -->
        <div class="popup-form" id="add-branch-form">
            <span class="close-btn" id="close-branch-form">&times;</span>
            <h2>Add Branch</h2>
            <form action="" method="post">
                <br>
                <div class="form-group">
                    <label for="branch-city">City:</label>
                    <input type="text" id="branch-city" name="branch-city" class="form-control">
                </div>
                <div class="form-group">
                    <label for="region">Region:</label>
                    <br>
                    <select class="form-control" name="region" id="region">
                        <option value="" disabled selected>Select Region</option>
                        <option value="NCR">National Capital Region</option>
                        <option value="CAR">Cordillera Administrative Region</option>
                        <option value="Region I">Ilocos Region</option>
                        <option value="Region II">Cagayan Valley</option>
                        <option value="Region III">Central Luzon</option>
                        <option value="Region IV-A">CALABARZON</option>
                        <option value="MIMAROPA">MIMAROPA Region</option>
                        <option value="Region V">Bicol Region</option>
                        <option value="Region VI">Western Visayas</option>
                        <option value="Region VII">Central Visayas</option>
                        <option value="Region VIII">Eastern Visayas</option>
                        <option value="Region IX">Zamboanga Peninsula</option>
                        <option value="Region X">Northern Mindanao</option>
                        <option value="Region XI">Davao Region</option>
                        <option value="Region XII">SOCCSKSARGEN</option>
                        <option value="Region XIII">Caraga Region</option>
                        <option value="BARMM">Bangsamoro Autonomous Region in Muslim Mindanao</option>
                    </select>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        <!--================ Start footer Area  =================-->
        <footer class="footer">
            <?php echo $body->footer() ?>
        </footer>
        <!--================ End footer Area  =================-->



        <?php
        $item->show_product($con);
        echo $body->script()
            ?>
        <script>
            // JavaScript to handle pop-up forms
            function showPopup(formId) {
                document.getElementById('popup-overlay').style.display = 'block';
                var form = document.getElementById(formId);
                form.style.display = 'block';
                form.classList.add('slide-in');
            }

            function hidePopup(formId) {
                document.getElementById('popup-overlay').style.display = 'none';
                var form = document.getElementById(formId);
                form.classList.remove('slide-in');
                form.style.display = 'none';
            }

            document.getElementById('add-branch-btn').addEventListener('click', function (event) {
                event.preventDefault();
                showPopup('add-branch-form');
            });

            document.getElementById('close-branch-form').addEventListener('click', function () {
                hidePopup('add-branch-form');
            });

            document.getElementById('popup-overlay').addEventListener('click', function () {
                hidePopup('add-branch-form');
            });
        </script>
    </body>

    </html>