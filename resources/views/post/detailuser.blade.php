@extends('layouts.masterfront')
@section('title','Kontak')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10"><?=$post->judul?></h1>
                            <h1 class="h5 text-white push-10">Diposting oleh: <?=$post->username?></h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<div style="padding: 30px">	
<p>
<div class="col-md-5"><img src="<?=url('gambarpost/'.$post->gambar)?>" class='img-responsive'></div>
<?=$post->isi?>
</p>
<a href="<?=url('dokumen/'.$post->dokumen)?>" target='_blank'>
<button class="btn btn-primary">Download</button></a>
</div>


@endsection