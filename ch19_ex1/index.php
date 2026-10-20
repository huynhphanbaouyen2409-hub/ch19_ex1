<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data - Hiển thị danh mục Guitars (Yêu cầu 4)
$category_id = 1;

// Get the products
$products = get_products_by_category($category_id);

/***************************************
 * Delete a product
 ****************************************/

// Sample data
$name = 'Fender Telecaster';

// Delete the product and display an appropriate message
$delete_message = "No rows were deleted.";

/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'tele';
$name = 'Fender Telecaster';
$description = 'NA';
$price = '949.99';
$discount_percent = 0; // Thêm tham số thứ 6 cho khớp với hàm add_product

// Insert the data (Yêu cầu 5: Truyền đủ 6 tham số)
$product_id = add_product($category_id, $code, $name, $description, $price, $discount_percent);

// Display an appropriate message
if ($product_id) {
    $insert_message = "1 row was inserted successfully. (Product ID: $product_id)";
} else {
    $insert_message = "No rows were inserted. (Mã sản phẩm '$code' có thể đã tồn tại)";
}

include 'home.php';
?>
