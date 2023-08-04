<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kota
 * 
 * @property int $id
 * @property string $name
 * @property int $provinsi
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Mitra[] $mitras
 *
 * @package App\Models
 */
class Kota extends Model
{
	protected $table = 'kotas';

	protected $casts = [
		'provinsi' => 'int'
	];

	protected $fillable = [
		'name',
		'provinsi'
	];

	public function provinsi()
	{
		return $this->belongsTo(Provinsi::class, 'provinsi');
	}

	public function mitras()
	{
		return $this->hasMany(Mitra::class, 'kota');
	}
}
