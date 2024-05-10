<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/***
 * Class AModel
 * @property int    $id
 * @property Carbon $created_at
 * @method static where($column, $operator, $value)
 */

class AModel extends Model
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/*** @return Carbon */
	public function getCreatedAt(): Carbon
	{
		return $this->created_at;
	}
}