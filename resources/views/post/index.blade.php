@extends('layouts.masterfront')
@section('title','Kontak')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">LIST POST</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<br>
<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="col-md-4">
<input class="form-control" type="text" id="txtcari" placeholder="Cari post" >
</div>
<button class="btn btn-info" id="btncari"><i class="fa fa-search fa-1x"></i> Cari</button>
<div style="clear:both"></div>
<br>
<a href="<?=url('post/form')?>"><button class="btn btn-info"> <i class="fa fa-plus fa-1x"></i> Tambah</button></a><br>
<br>
<table class="table table-hover table-striped">
<tr>
<th width="20%">Judul</th>
<th width="40%">Isi</th>
<th width="20%">Kategori</th>
<th width="10%">Tanggal</th>
<th width="10%">Opsl</th>

</tr>

<?php
foreach ($posts as $p) {
	?>

	<tr>
		<td><a href='<?=url('post/detail/'.$p->id_post)?>'><?=$p->judul?></a>	
		</td>

		<td><?=$p->isi?>
		</td>

		<td><?=$p->kategori->nama?>
		</td>

		<td><?=$p->created_at?>
		</td>
		<td>
			
			<a href="<?=url('post/form?id='.$p->id_post)?>"><button class="btn btn-info">Ubah</button>
			</a>	

			<a href="<?=url('post/hapus?id='.$p->id_post)?>"><button class="btn btn-danger">Hapus</button>
			</a>	
		</td>
	</tr>
	<?php
}
?>
</table>

</div>

<div style="clear:both"></div>
<script>
	$(document).ready(function(){
		$("#btncari").click(function(){
window.location="<?=url('post/cari')?>/"+$("#txtcari").val();
		});
		
			});
</script>


{!! $posts->render() !!}
@endsection