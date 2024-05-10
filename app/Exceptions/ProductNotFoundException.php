<?php

namespace App\Exceptions;

use Exception;

class ProductNotFoundException extends Exception
{
    protected $message = "Product Not Found";
}
