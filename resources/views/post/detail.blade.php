@extends('layouts.masterfront')
@section('title','Kontak')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">Detail Post</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>

<div class="panel panel-default">
<div class="panel-body">
	
<a href="<?=url('post/form?id='.$post->id_post)?>"><button class="btn btn-info">Ubah</button></a><br>

<table class="table table-hover table-striped">
<tr>
<th>Judul</th>
<td><?=$post->judul?></td>
</tr>

<tr>
<th>Isi</th>
<td><?=$post->isi?></td>
</tr>

<tr>
<th>Gambar</th>
<td><div class="col-md-4">
<img src="<?=url('gambar/'.$post->gambar)?>" class='img-responsive'></div></td>
</tr>

<tr>
<th>Dokumen</th>
<td><?=$post->dokumen?>
<a href="<?=url('dokumen/'.$post->dokumen)?>" target='_blank'>
<button class="btn btn-primary">Download</button></a>
</td>
</tr>



</table>


</div>
</div>


@endsection