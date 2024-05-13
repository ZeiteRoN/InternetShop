<?php

namespace App\ValueObjects\Constants;

/***
 * Class ProductCategory
 * @package App\ValueObjects\Constants
 */
class ProductCategories
{
	/*** @var string */
	public const COMPUTERS = 'computers';
	/*** @var string */
	public const PHONES = 'phones';
	/*** @var string */
	public const CHEMICALS = 'chemicals';
	/*** @var string */
	public const FOOD = 'food';
	/*** @var string */
	public const TOOLS = 'tools';

	/*** @var array */
	public const ALL = [
		self::COMPUTERS,
		self::PHONES,
		self::CHEMICALS,
		self::FOOD,
		self::TOOLS,
	];
}