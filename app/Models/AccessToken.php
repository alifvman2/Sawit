<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessToken
 * 
 * @property int $id
 * @property string $access_token
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class AccessToken extends Model
{
	protected $table = 'access_tokens';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $hidden = [
		'access_token'
	];

	protected $fillable = [
		'access_token',
		'user_id'
	];
}
