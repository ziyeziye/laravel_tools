<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserVerify
 * 
 * @property int $id
 * @property int $user_id
 * @property int $type
 * @property string $data
 * @property bool $state
 * @property string $reply
 * @property Carbon $create_time
 * @property Carbon $update_time
 *
 * @package App\Models
 */
class UserVerify extends Model
{
	protected $table = 'user_verifies';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'type' => 'int',
		'state' => 'bool'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'user_id',
		'type',
		'data',
		'state',
		'reply',
		'create_time',
		'update_time'
	];
}
