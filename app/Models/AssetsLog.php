<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AssetsLog
 * 
 * @property int $id
 * @property int $assets_type_id
 * @property string $assets_name
 * @property int $wallet_id
 * @property string $operate_type
 * @property float $amount
 * @property float $amount_before_change
 * @property string $remark
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class AssetsLog extends Model
{
	protected $table = 'assets_log';

	protected $casts = [
		'assets_type_id' => 'int',
		'wallet_id' => 'int',
		'amount' => 'float',
		'amount_before_change' => 'float'
	];

	protected $fillable = [
		'assets_type_id',
		'assets_name',
		'wallet_id',
		'operate_type',
		'amount',
		'amount_before_change',
		'remark'
	];
}
