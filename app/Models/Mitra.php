<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mitra
 * 
 * @property int $id
 * @property int $users
 * @property string $name
 * @property string|null $jenis_mitra
 * @property string|null $no_telp
 * @property int $provinsi
 * @property int $kota
 * @property string|null $niptu
 * @property string|null $npwp
 * @property string|null $siup
 * @property string|null $akta
 * @property string|null $tdp
 * @property string|null $bank
 * @property string|null $rekening
 * @property string|null $pemilik_rek
 * @property string|null $izin_operasi
 * @property int $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Mitra extends Model
{
	use SoftDeletes;
	protected $table = 'mitra';

	protected $casts = [
		'users' => 'int',
		'provinsi' => 'int',
		'kota' => 'int',
		'created_by' => 'int',
		'updated_by' => 'int',
		'deleted_by' => 'int'
	];

	protected $fillable = [
		'users',
		'name',
		'jenis_mitra',
		'no_telp',
		'provinsi',
		'kota',
		'niptu',
		'npwp',
		'siup',
		'akta',
		'tdp',
		'bank',
		'rekening',
		'pemilik_rek',
		'izin_operasi',
		'created_by',
		'updated_by',
		'deleted_by'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users');
	}

	public function kota()
	{
		return $this->belongsTo(Kota::class, 'kota');
	}

	public function provinsi()
	{
		return $this->belongsTo(Provinsi::class, 'provinsi');
	}
}
