@extends('layouts.app')

@section('content')

	<div class="p-5">
		<label class="dark-green overBold">Form Registrasi Mitra</label>
		<form>
			<h6 class="dark-green overBold pt-5">Identitas Mitra</h6>
			<div class="row pt-5">
				<div class="col-4 pb-3">
					<div class="form-group row pb-3">
						<label for="nama_lengkap" class="col-sm-6 col-form-label">Nama Lengkap</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="alamat_lengkap" class="col-sm-6 col-form-label">Alamat Lengkap</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="email" class="col-sm-6 col-form-label">Alamat Email</label>
						<div class="col-sm-6">
						  	<input type="email" class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="pendidikan" class="col-sm-6 col-form-label">Pendidikan Terakhir</label>
						<div class="col-sm-6">
							<select class="form-control" id="pendidikan" name="pendidikan">
							  	<option></option>
							</select>
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="nama_mitra" class="col-sm-6 col-form-label">Nama Mitra</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="nama_mitra" name="nama_mitra">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="jenis_mitra" class="col-sm-6 col-form-label">Jenis Mitra</label>
						<div class="col-sm-6">
							<select class="form-control" id="jenis_mitra" name="jenis_mitra">
							  	<option></option>
							</select>
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="alamat_mitra" class="col-sm-6 col-form-label">Alamat Mitra</label>
						<div class="col-sm-6">
							<textarea class="form-control" id="alamat_mitra" name="alamat_mitra"></textarea>
						</div>
					</div>
				</div>
				<div class="col-4 form-group row pb-3">
					<div class="form-group row pb-3">
						<label for="no_telp" class="col-sm-6 col-form-label">Nomor Telepon</label>
						<div class="col-sm-6">
						  	<input type="number" class="form-control" id="no_telp" name="no_telp">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="provinsi" class="col-sm-6 col-form-label">Provinsi</label>
						<div class="col-sm-6">
							<select class="form-control" id="provinsi" name="provinsi">
							  	<option></option>
							</select>
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="kota" class="col-sm-6 col-form-label">Kota/Kabupaten</label>
						<div class="col-sm-6">
							<select class="form-control" id="kota" name="kota">
							  	<option></option>
							</select>
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="deskripsi" class="col-sm-6 col-form-label">Deskripsi Mitra Singkat</label>
						<div class="col-sm-6">
							<textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="niptu" class="col-sm-6 col-form-label">NIPTU</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="niptu" name="niptu">
						</div>	
					</div>
					<div class="form-group row pb-3">
						<label for="NPWP" class="col-sm-6 col-form-label">NPWP</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="NPWP" name="NPWP">
						</div>	
					</div>
					<div class="form-group row pb-3">
						<label for="siup" class="col-sm-6 col-form-label">SIUP</label>
						<div class="col-sm-6">
						  	<input type="file" class="form-control" id="siup" name="siup">
						</div>
					</div>
				</div>
				<div class="col-4 form-group row pb-3">
					<div class="form-group row pb-3">
						<label for="akta_didik" class="col-sm-6 col-form-label">Akta Pendidikan</label>
						<div class="col-sm-6">
						  	<input type="file" class="form-control" id="akta_didik" name="akta_didik">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="tdp" class="col-sm-6 col-form-label">TDP</label>
						<div class="col-sm-6">
						  	<input type="file" class="form-control" id="tdp" name="tdp">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="bank" class="col-sm-6 col-form-label">Bank</label>
						<div class="col-sm-6">
							<select class="form-control" id="bank" name="bank">
							  	<option></option>
							</select>
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="rekening" class="col-sm-6 col-form-label">Rekening Bank</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="rekening" name="rekening">
						</div>
					</div>
					<div class="form-group row pb-3">
						<label for="pemilik_rekening" class="col-sm-6 col-form-label">Pemilik Rekening Bank</label>
						<div class="col-sm-6">
						  	<input type="text" class="form-control" id="pemilik_rekening" name="pemilik_rekening">
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success bg-dark-green px-5 mx-5">Registrasi Mitra</button>
		</form>
	</div>

@endsection