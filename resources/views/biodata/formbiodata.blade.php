@extends('layouts.masterfront')
@section('title','Formbiodata')


@section('content')
            <link rel="stylesheet" 
         href="<?=url('plugin/jquery-te/jquery-te-1.4.0.css')?>">
          <script src="<?=url('js/jquery.min.js')?>"></script>
         <script src="<?=url('plugin/jquery-te/jquery-te-1.4.0.min.js')?>"></script>

<script>
	$(document).ready(function(){
$('.jqte').jqte();
	});
</script>
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">Form Biodata</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<br/>
<div class="col-md-2"></div>
<div class='col-md-8'>
<form class="form-horizontal" action="formbiodata" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="<?=$biodata->id_biodata?>"/>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">NIK</label>
	<div class="col-sm-4">
		<input type="text" name="nik" placeholder="NIK" class="form-control" value="<?=$biodata->nik?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-4">
		<input type="text" name="nama" placeholder="Nama" class="form-control" value="<?=$biodata->nama?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">TTL</label>
	<div class="col-sm-4">
		<input type="text" name="ttl" placeholder="ttl" class="form-control" value="<?=$biodata->ttl?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Jenis Kelamin</label>
	<div class="col-sm-4">
	<label>
		<input type="radio" name="jenis_kelamin" class="form-control" value="1" 
		<?=$biodata->jenis_kelamin=='1'?'checked':''?>>Laki-Laki</label>
	<label>
		<input type="radio" name="jenis_kelamin" class="form-control" value="2" 
		<?=$biodata->jenis_kelamin=='2'?'checked':''?>>Perempuan</label>
		
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Tahun Masuk</label>
	<div class="col-sm-4">
		<input type="text" name="tahun_masuk" placeholder="Tahun Masuk" class="form-control" value="<?=$biodata->tahun_masuk?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-6">
		<input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?=$biodata->alamat?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Hobi</label>
	<div class="col-sm-4">
		<input type="text" name="hobi" placeholder="Hobi" class="form-control" value="<?=$biodata->hobi?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Jabatan</label>
	<div class="col-sm-4">
		<input type="text" name="jabatan" placeholder="jabatan" class="form-control" value="<?=$biodata->jabatan?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Prestasi di NRS</label>
	<div class="col-sm-4">
		<input type="text" name="prestasi_motor" placeholder="Prestasi" class="form-control" value="<?=$biodata->prestasi_motor?>">
	</div>
</div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Motto</label>
	<div class="col-sm-4">
		<input type="text" name="motto" placeholder="Motto" class="form-control" value="<?=$biodata->motto?>">
	</div>
</div>
<div class="form-group">
	<div class="com-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary"><i class="fa fa-save fa-1x"></i> Simpan</button>
	</div>
</div>
<input type="hidden" name="id" value="{!! $biodata->id_biodata !!}">
</form>
    </div>

<div style="clear:both"></div>
@endsection