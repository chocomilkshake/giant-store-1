<?php
include '../include/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedCategory = $_POST['category'];
    $scategorySql = mysqli_query($con, "SELECT * FROM sub_category WHERE category='$selectedCategory'");
    ?>
    <label for="category" style="">Sub Category</label>
    <br>
    <select form="save" class="form-control" name="subcategory" id="subcategory">
        <option value="" disabled selected>SELECT SUB CATEGORY</option>
        <?php

        while ($subCategory = mysqli_fetch_array($scategorySql)) {
            echo "<option value='" . $subCategory['id'] . "'>" . $subCategory['name'] . "</option>";
        }

        ?>
    </select>
    <?php


}