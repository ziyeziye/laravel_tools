<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MessagesReadLog
 * 
 * @property int $id
 * @property string $device_id
 * @property string $remark
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class MessagesReadLog extends Model
{
	protected $table = 'messages_read_log';

	protected $fillable = [
		'remark'
	];
}
