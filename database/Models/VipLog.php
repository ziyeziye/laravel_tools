<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VipLog
 * 
 * @property int $id
 * @property string $device_id
 * @property int $vip_id
 * @property int $amount
 * @property float $price
 * @property float $total_price
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class VipLog extends Model
{
	protected $table = 'vip_log';

	protected $casts = [
		'vip_id' => 'int',
		'amount' => 'int',
		'price' => 'float',
		'total_price' => 'float'
	];

	protected $fillable = [
		'vip_id',
		'amount',
		'price',
		'total_price'
	];
}
