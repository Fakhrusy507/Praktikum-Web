<?php

namespace Controller;

abstract class Controller
{
    // var atribut
    protected $controllerName;
    protected $controllerMethod;

    //method untuk mengambil semua atribut
    public function getControllerAttribute()
    {
        return [
            "controller-name" => $this->controllerName,
            "controller-method" => $this->controllerMethod,
        ];
    }
}