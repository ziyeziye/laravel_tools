<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nick_name
 * @property string $phone
 * @property int $verify_id
 * @property string $create_time
 * @property string $update_time
 * @property string $avatar
 * @property string $data
 * @property string $username
 * @property int $invite_uid
 * @property boolean $status
 * @property string $salt
 * @property string $reg_ip
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nick_name', 'phone', 'verify_id', 'create_time', 'update_time', 'avatar', 'data', 'username', 'invite_uid', 'status', 'salt', 'reg_ip'];

}
