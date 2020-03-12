@extends('layouts.masterfront')
@section('title','Form')


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
                            <h1 class="h2 text-white push-10">Form Post</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<br/>
<div class="col-md-2"></div>
<div class='col-md-8'>
<form class="form-horizontal" action="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="<?=$post->id_post?>"/>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Judul</label>
	<div class="col-sm-10">
		<input type="text" name="judul" placeholder="judul" class="form-control" value="<?=$post->judul?>">
	</div>

</div>

<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Isi</label>
	<div class="col-sm-10">
            
            
            <textarea name="isi" class="form-control input-lg jqte" rows="5"></textarea>
	
	</div>

</div>


<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Kategori</label>
	<div class="col-sm-10">
<?php
$i=0;
foreach ($kategoris as $k){
	
?>
<div class="radio">
  <label>
    <input type="radio" name="kategori" value="<?=$k->id_kategori?>" <?=$i==0||$k->id_kategori==$post->id_kategori?'checked':''?>>
    <?=$k->nama ?>
  </label>
</div>
<?php
$i++;
 } ?>
</div></div>
<div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Gambar</label>
	<div class="col-sm-10">
		<input type="file" name="gambar">

</div>
</div>

<!-- <div class="form-group">
	<label for="nama" class="col-sm-2 control-label">Dokumen</label>
	<div class="col-sm-10">
	<input type="file" name="dokumen">

</div>
</div> -->


<div class="form-group">
	<div class="com-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary"><i class="fa fa-save fa-1x"></i> Simpan</button>
	</div>
</div>
</form>
    </div>

<div style="clear:both"></div>
@endsection