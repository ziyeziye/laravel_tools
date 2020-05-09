<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * 
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $status
 * @property string $type
 * @property int $hot
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Question extends Model
{
	protected $table = 'questions';

	protected $casts = [
		'status' => 'int',
		'hot' => 'int'
	];

	protected $fillable = [
		'title',
		'content',
		'status',
		'type',
		'hot'
	];
}
