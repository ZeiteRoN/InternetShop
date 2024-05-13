<?php

namespace App\Exceptions;

use Exception;

/*** Class ProductCategoryNotFoundException */
class ProductCategoryNotFoundException extends Exception
{
	/*** @var string */
	protected $message = 'Product Category Not Found';
}
