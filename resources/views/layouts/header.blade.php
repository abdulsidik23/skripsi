<!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <div class="content-boxed">

                    <!-- Header Navigation Left -->
                    <ul class="nav-header pull-left">
                        <li class="header-content">
                            <a class="h5">
                                <i></i> <span class="h4 font-w300 text-white">Nmax Riders Samarinda</span>
                            </a>
                        </li>
                    </ul>
                          </ul>
    
                    <!-- Header Navigation Right -->
                    
                    <!-- END Header Navigation Right -->

                    <!-- Main Header Navigation -->
                    <ul class="js-nav-main-header nav-main-header pull-left">
                        <li class="text-right hidden-md hidden-lg">
                            <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                            <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-times"></i>
                            </button>
                        </li>
                        <li>
                             <a href="<?=url('/')?>"><i class="si si-home fa-1x"></i> Home</a>
                        </li>
                         <li>
                             <a href="<?=url("profil")?>"><i class="si si-flag fa-1x"></i> Profil</a>
                        </li>
                        
<?php if(array_key_exists('tipe_user', $_SESSION)&&$_SESSION['tipe_user']=='admin'){
    ?>
<li>
<a href="<?=url('/post')?>"><i class="fa fa-th-list fa-1x"></i> Post <span class="sr-only"></span></a></li>
  
  <li>
<a href="<?=url('/biodata')?>"><i class="fa fa-th-list fa-1x"></i> Biodata <span class="sr-only"></span></a></li>
        
    <?php 
    }
    else {
        ?>
                        
                        <li>
                            <a class="nav-submenu" href="javascript:void(0)"><i class="si si-list fa-1x"></i> Informasi</a>
                            <ul>
                                <li>
                                    <a href="<?=url('post/berita')?>">Berita</a>
                                </li>
                                <li>
                                    <a href="<?=url('post/event')?>">Event</a>
                                </li>
                                <li>
                                    <a href="<?=url('post/pengumuman')?>">Pengumuman</a>
                                </li>
                                <li>
                                    <a href="<?=url('biodata')?>">Biodata Pengurus</a>
                                </li>
                                <li>
                            </ul>
                        </li>
    <?php } ?>
                        <li>
                            <a href="<?=url("curhat")?>"><i class="si si-question fa-1x"></i> Tanya Kami</a>
                        </li>
                        <li>
                            <a href="<?=url("kontak")?>"><i class="si si-book-open fa-1x"></i> Kontak</a>
                        </li>
                        
                        <form class="js-nav-main-header nav-main-header pull-left">
        <div class="form-group">
            <div class="col-xs-6">
                <input class="form-control" type="text" id="txtcari" name="login1-username" placeholder="Search">
            
            </div>
            <div class="col-xs-4">
                <button class="btn btn-default push-5-r push-10" id="btncari" type="button" style="float: right"><i class="fa fa-search"></i> Cari</button>

            </div>
        </div>
       
           
         </div><script>
$(document).ready(function(){
$("#btncari").click(function(){
window.location="<?=url('post/cari')?>/"+$("#txtcari").val();
});
});</script>
    </form><!-- /.navbar-collapse -->

                    </ul>
                    <!-- END Main Header Navigation -->



    
    <ul class="js-nav-main-header nav-main-header pull-right">
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
        <li><a href="<?=url('logout')?>"><i class="si si-logout fa-1x"></i> Logout</a></li>
    <?php 
    } else {
    ?>
        <li><a href="<?=url('login')?>"><i class="si si-login fa-1x"></i> Login</a></li>
        <li><a href="<?=url('daftar')?>"><i class="si si-arrow-up fa-1x"></i> Daftar</a></li>

    <?php  } ?>

    </ul>
  </div>
  <!-- /.container-fluid -->
                    <!-- END Header Navigation Left -->
                </div>
            </header>
            <!-- END Header -->