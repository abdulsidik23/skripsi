@extends('layouts.masterfront')
@section('title','Kontak')


@section('content')

<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">List User</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<br/>
<div class="col-md-2"></div>
<div class="col-md-8">
<?php 
$i=0;
foreach ($users as $u) {
	?> <a href="<?=url('chatbox/'.$u->user_kirim)?>">
	<div class="panel panel-primary">
		<div class="panel-body">
			<?=$u->user_kirim?>
			<span class='badge'><?=$jum[$i]==0?'':$jum[$i]?></span>
		</div>
	</div>
	</a>
	 <?php 
	 $i++;
}?>
</div>
<div style="clear:both"></div>
@endsection