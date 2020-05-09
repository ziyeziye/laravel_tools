<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WalletAsset
 * 
 * @property int $id
 * @property int $wallet_id
 * @property int $assets_type_id
 * @property string $address
 * @property float $amount
 * @property int $net_type_id
 * @property string $net_type_nmae
 * @property float $price
 * @property float $total_price
 * @property int $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class WalletAsset extends Model
{
	protected $table = 'wallet_assets';

	protected $casts = [
		'wallet_id' => 'int',
		'assets_type_id' => 'int',
		'amount' => 'float',
		'net_type_id' => 'int',
		'price' => 'float',
		'total_price' => 'float',
		'is_active' => 'int'
	];

	protected $fillable = [
		'wallet_id',
		'assets_type_id',
		'address',
		'amount',
		'net_type_id',
		'net_type_nmae',
		'price',
		'total_price',
		'is_active'
	];
}
