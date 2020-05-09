<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AssetsType
 * 
 * @property int $id
 * @property int $net_type_id
 * @property string $assets_name
 * @property string $icon
 * @property string $description
 * @property string $contract
 * @property int $is_main
 * @property int $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class AssetsType extends Model
{
	protected $table = 'assets_type';

	protected $casts = [
		'net_type_id' => 'int',
		'is_main' => 'int',
		'is_active' => 'int'
	];

	protected $fillable = [
		'net_type_id',
		'assets_name',
		'icon',
		'description',
		'contract',
		'is_main',
		'is_active'
	];
}
