<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VipType
 * 
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property float $price
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class VipType extends Model
{
	protected $table = 'vip_types';

	protected $casts = [
		'price' => 'float'
	];

	protected $fillable = [
		'name',
		'title',
		'description',
		'price'
	];
}
