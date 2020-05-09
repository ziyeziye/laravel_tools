<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Friend
 * 
 * @property int $id
 * @property string $device_id
 * @property string $name
 * @property string $address
 * @property string $remark
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Friend extends Model
{
	protected $table = 'friends';

	protected $fillable = [
		'device_id',
		'name',
		'address',
		'remark'
	];
}
