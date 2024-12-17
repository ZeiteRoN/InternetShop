<?php

use App\ModelControllers\ComputerPartController;

if (!function_exists('computerPartController')) {
    /*** @return ComputerPartController */
    function productController(): ComputerPartController
    {
        return app('ComputerPartController');
    }
}

