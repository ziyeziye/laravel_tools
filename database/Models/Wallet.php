<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wallet
 * 
 * @property int $id
 * @property string $device_id
 * @property string $wallet_name
 * @property float $total_amount
 * @property int $is_backup
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Wallet extends Model
{
	protected $table = 'wallets';

	protected $casts = [
		'total_amount' => 'float',
		'is_backup' => 'int'
	];

	protected $fillable = [
		'wallet_name',
		'total_amount',
		'is_backup'
	];
}
