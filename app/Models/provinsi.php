<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provinsi
 * 
 * @property int $id
 * @property string $name
 * @property int $location_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Kota[] $kotas
 * @property Collection|Mitra[] $mitras
 *
 * @package App\Models
 */
class Provinsi extends Model
{
	protected $table = 'provinsis';

	protected $casts = [
		'location_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'location_id',
		'status'
	];

	public function kotas()
	{
		return $this->hasMany(Kota::class, 'provinsi');
	}

	public function mitras()
	{
		return $this->hasMany(Mitra::class, 'provinsi');
	}
}
