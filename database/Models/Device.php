<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Device
 * 
 * @property int $id
 * @property string $uuid
 * @property string $model
 * @property int $max_wallet
 * @property int $max_wallet_name
 * @property int $status
 * @property int $vip
 * @property Carbon $vip_due_time
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Device extends Model
{
	protected $table = 'devices';

	protected $casts = [
		'max_wallet' => 'int',
		'max_wallet_name' => 'int',
		'status' => 'int',
		'vip' => 'int'
	];

	protected $dates = [
		'vip_due_time'
	];

	protected $fillable = [
		'model',
		'max_wallet',
		'max_wallet_name',
		'status',
		'vip',
		'vip_due_time'
	];
}
