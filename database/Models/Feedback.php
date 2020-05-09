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
 * @property string $device_id
 * @property string $type
 * @property string $content
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string $img
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Feedback extends Model
{
	protected $table = 'feedbacks';

	protected $fillable = [
		'device_id',
		'type',
		'content',
		'name',
		'mobile',
		'email',
		'img'
	];
}
