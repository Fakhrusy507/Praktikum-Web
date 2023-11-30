<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

//class controller product
class ProductController extends Controller
{
    //gunakan trait yang sudah dibuat
    use ResponseFormatter;

    //magic method, diakses pada pembuatan objek
    public function __construct()
    {
        //set atribut controllerName pada Parent class Controller
        $this->controllerName = "Get All product";
        //set atribut controller method pada Parent class Controller
        $this->controllerMethod = "GET";
    }

    //method untuk get data product
    public function getAllProduct()
    {
        //array dummy data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller-attribute" => $this->getControllerAttribute(), // ambil method dari parent class
            "product" => $dummyData
        ];

        //method dari trait yang sudah dibuat
        return $this->ResponseFormatter(200, "Success", $response);
    }
}