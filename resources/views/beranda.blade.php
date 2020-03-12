@extends('layouts.masterfront')
@section('title','Beranda')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10"></h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>

<link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css.css">
<style type="text/css">
.jumbotron {
    position: relative;
    background: #000 url("gambar/poly6.jpg") center center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
}
</style>

        <div class="jumbotron">
        
        <div class="col-md-2">
        <img src="<?=url('gambar/11.png')?>" class="img-rounded" width="370" height="240">
        </div>

        <center><div class="col-md-9">
        <font color="black"><h1><b>ASSALAMU'ALAIKUM</b></h1></font>
        <font color="maroon"><h3> Selamat Datang di Website Resmi NMAX RIDERS SAMARINDA</h3>
        <h3> Salam Ride Together Brother Forever</h3></font></div>
        
        <div class="col-md-5"> 
        </div>
        

      </div

 <link rel="stylesheet" href="<?=url('bootsrap/css/bootstrap.css')?>">
 <link rel="stylesheet" href="<?=url('plugin/rs/responsiveslides.css')?>">
 <link rel="stylesheet" href="<?=url('demo.css')?>">
 
  <script src="<?=url('http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js')?>"></script>
 <script src="<?=url('plugin/rs/responsiveslides.min.js')?>"></script>
<script>
  $(document).ready(function(){
 $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

  });

</script>

  <link rel="stylesheet" href="plugin/rs/responsiveslides.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="plugin/rs/responsiveslides.min.js"></script>

  <!-- Slider Autoplay -->
  <div class="col-md-2"></div>
  <div class="col-md-8">
                            <div class="block">
                                
                                <div class="block-content">
                                    <!-- Slider with autoplay -->
                                    <div class="js-slider" data-slider-dots="true" data-slider-autoplay="true" data-slider-autoplay-speed="1700">
                                        @foreach(App\Post::orderBy('created_at', 'desc')->paginate(10) as $post)
                                        <div>
                                                <img class="img-responsive" src="<?=url('gambarpost/'.$post->gambar)?>" alt="">
                                        </div>
                                        @endforeach    
                                    </div>

                                    <!-- END Slider with autoplay -->
                                </div>
                            </div>
                            <!-- END Slider Autoplay -->
  </div>
  
  <div style="clear:both"></div>

                        </section>
                    </div>
                </div>
                <!-- END Ratings -->



<br>
<a href="<?=url('post')?>"><h2 style="text-align:center">Post Terbaru</h2></a>
<br>
<div class="col-md-1"></div>
<div class="col-md-10">
<?php
if(count($posts))
{
foreach ($posts as $p) {
	?>


<div class="col-sm-4">
        <div class="panel panel-default">
        <div class="panel-body">
	<h3 style="text-align:center"><?=$p->judul?></h3>
	
        <?php if($p->gambar){?>
        <img src="<?=url('gambarpost/'.$p->gambar)?>" class='img-responsive'>
        <?php } ?>
	<?php
	echo substr($p->isi, 0,400);
	if (strlen($p->isi)>400) echo '...';?>
	<a href="<?=url('post/detail/'.$p->id_post)?>">
	<button class="btn btn-primary">Selengkapnya</button>
</a>
</div>
</div>
</div>
	<?php }
}
        else
        {
            ?>
<br/>
<div style="text-align: center">
Belum Ada Post
</div>
<br/>
                <?php
            
        }
        ?>
</div>
<div style="clear:both"></div>

@endsection