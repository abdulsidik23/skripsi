@extends('layouts.masterfront')
@section('title','Kontak')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">ARTIKEL</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<?php
foreach ($posts as $p) {
	?>
<div class="panel panel-default"> 
<div class="panel-heading">
<h2 style="margin-bottom:-30px; margin-top:0px"><?=$p->judul?></h2>
</p>
<br><?=$p->created_at ?>
</div>
<div class="panel-body">
<div class="col-md-4">
	<img class='img-responsive' src="<?=url('gambarpost/'.$p->gambar)?>"></div>
	<div class="col-md-8">
	<?php echo substr($p->isi, 0,400);
if (strlen($p->isi)>400) {
	echo '...';
}
	?>
	<br>
	<a href="<?=url('post/detail/'.$p->id_post)?>">
	<button class="btn btn-primary">Selengkapnya</button></a>
</div>
</div>
</div>
</p>
	<?php
}

?>
{!! $posts->render() !!}
@endsection
