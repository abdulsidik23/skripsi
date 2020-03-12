@extends('layouts.masterfront')
@section('title','Indexbiodata')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">Biodata Pengurus</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<br>

<div class="col-md-2"></div>
<div class="col-md-8">
<?php if(array_key_exists('tipe_user', $_SESSION)&&$_SESSION['tipe_user']=='admin'){
    ?>
<a href="<?=url('biodata/formbiodata')?>"><button class="btn btn-success">Tambah</button></a>
<?php } ?>

<table class="table table-hover table-striped">
<tr>
<th width="10%">NIK</th>
<th width="20%">Nama</th>
<th width="10%">TTL</th>
<th width="10%">Alamat</th>
<th width="10%">Tahun Masuk</th>
<th width="10%">Hobi</th>
<th width="10%">Jabatan</th>
<th width="20%">Prestasi di Komunitas</th>
<th width="10%">Motto</th>
<?php if(array_key_exists('tipe_user', $_SESSION)&&$_SESSION['tipe_user']=='admin'){
    ?>

<th>Opsi</th>
<?php } ?>
</tr>

<?php
foreach ($biodatas as $p) {
	?>

	<tr>
		<td><?=$p->nik?>
		</td>

		<td><?=$p->nama?>
		</td>

		<td><?=$p->ttl ?></td>
		<td>{!! $p->alamat !!}</td>

		<td><?=$p->tahun_masuk?>
		</td>
		<td><?=$p->hobi?>
		</td>
		<td><?=$p->jabatan?>
		</td>
		<td><?=$p->prestasi_motor?>
		</td>
		<td><?=$p->motto?>
		</td>
<?php if(array_key_exists('tipe_user', $_SESSION)&&$_SESSION['tipe_user']=='admin'){
    ?>
		<td><a href="<?=url('biodata/formbiodata?id='.$p->id_biodata)?>"><button class="btn btn-info">Edit</button>
		<a href="<?=url('biodata/hapus?id='.$p->id_biodata)?>"><button class="btn btn-danger">Hapus</button></td>
<?php } ?>

	</tr>

<?php } ?>
	
</table>

</div>

<div style="clear:both"></div>


{!! $biodatas->render() !!}
@endsection