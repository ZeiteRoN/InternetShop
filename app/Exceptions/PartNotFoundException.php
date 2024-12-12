<?php

namespace App\Exceptions;

use Exception;

class PartNotFoundException extends Exception
{
    protected $message = "Product Not Found";
}
