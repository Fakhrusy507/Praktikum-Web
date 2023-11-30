<?php

include "Controller/ProductController.php";

use Controller\ProductController;

//deklarasi objek class
$productController = new ProductController;

//tampilkan hasil kembalian dari methos getAllProduct menggunaakan echo
echo $productController->getAllProduct();