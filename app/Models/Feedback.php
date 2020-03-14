<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * 
 * @property int $id
 * @property int $user_id
 * @property int $type
 * @property string $content
 * @property string $nick_name
 * @property string $contact
 * @property Carbon $create_time
 * @property Carbon $update_time
 *
 * @package App\Models
 */
class Feedback extends Model
{
	protected $table = 'feedbacks';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'type' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'user_id',
		'type',
		'content',
		'nick_name',
		'contact',
		'create_time',
		'update_time'
	];
}
