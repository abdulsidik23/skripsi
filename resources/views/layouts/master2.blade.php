<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" 
         href="<?=url('bootstrap/css/bootstrap.css')?>">
          <link rel="stylesheet" 
         href="<?=url('css/animate.css')?>">
           <link rel="stylesheet" 
         href="<?=url('css/blue.css')?>">
         <link rel="stylesheet" 
         href="<?=url('plugin/jquery-te/jquery-te-1.4.0.css')?>">
          <script src="<?=url('js/jquery.min.js')?>"></script>
        <script src="<?=url('bootstrap/js/bootstrap.js')?>"></script>
         <script src="<?=url('plugin/jquery-te/jquery-te-1.4.0.min.js')?>"></script>

    </head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">NRS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

<?php if(array_key_exists('tipe_user', $_SESSION)&&$_SESSION['tipe_user']=='admin'){
    ?>
<li <?="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']==url("/post").'/'?'class="active"':''?>>
<a href="<?=url('/post')?>">Post <span class="sr-only">(current)</span></a></li>
        
    <?php 
    }
    else {
        ?>

        <li <?="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']==url("/").'/'?'class="active"':''?>><a href="<?=url('/')?>">Beranda <span class="sr-only">(current)</span></a></li>
        <li <?="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']==url("profil")?'class="active"':''?>><a href="<?=url("profil")?>">Profil</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Informasi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=url('post/berita')?>">Berita</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?=url('post/event')?>">Event</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?=url('post/pengumuman')?>">Pengumuman</a></li>
            </ul>
        </li> 
        <li <?="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']==url("kontak")?'class="active"':''?>><a href="<?=url("kontak")?>">Kontak</a></li>
      
 <?php
        } ?>

      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" id="txtcari" class="form-control" placeholder="Search">
        </div>
        <button class="btn btn-default" id="btncari">Cari</button>
<script>
$(document).ready(function(){
$("#btncari").click(function(){
window.location="<?=url('post/cari')?>/"+$("#txtcari").val();
});
});</script>
    </form><!-- /.navbar-collapse -->

    <ul class="nav navbar-nav navbar-right">
    <?php if (array_key_exists('user', $_SESSION)&&$_SESSION['user']) { ?>

     <li><a href="<?=url('curhat')?>"><span class='glyphicon glyphicon-envelope'></span>
     <span id='jumnotif' class='badge'></span></a>
     </li>
        
     <script type="text/javascript">
     $(document).ready(function(){
var timer = setInterval(function(){
    $.get('<?=url('getnotif')?>',{},
        function(data){
            if(data!=0)
            $('#jumnotif').text(data);
        else
            $('#jumnotif').text('');
        });
},1000);
});
     </script>
        <li><a href="<?=url('logout')?>">Logout</a></li>
    <?php 
    } else {
    ?>

        <li><a href="<?=url('login')?>">Login</a></li>
        <li><a href="<?=url('daftar')?>">Daftar</a></li>

    <?php  } ?>

    </ul>
  </div><!-- /.container-fluid -->

</nav>
       

        <div class="container" style="min-height:500px">
            @yield('content')
        </div>
    </body>
 <footer>
 <div style='text-align:center'>@Komuntas Nmax Riders Samarinda</div>
 </footer>
</html>