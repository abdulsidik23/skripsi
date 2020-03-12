@extends('layouts.masterfront')
@section('title','Kontak')


@section('content')
<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">Tanya Jawab Online</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="panel panel-default">
	<br>
        <h3>
	<span id='user_terima'><?=isset($user_terima)?$user_terima:'admin'?></span>
        </h3>
	</div>
	<div class="panel-body">

		<div style="height:400px; overflow-y:scroll" id="chatbox">
			
		</div>
                <textarea id="tac" class="form-control input-lg" id="mega-bio" name="mega-bio" rows="5" placeholder="Tulis Pesan ... "></textarea>
	</div>
</div>
</div>
<div style="clear:both"></div>
<script>
	$(document).ready(function(){

$.get('<?=url('ambilchat')?>/'+$('#user_terima').text(),
	{},function(data){
		$('#chatbox').html(data);
		var d=$('#chatbox');
		d.scrollTop(d.prop('scrollHeight'));
	});

var timer = setInterval(function(){
	$.get('<?=url('ambilchat')?>/'+$('#user_terima').text(),
	{},function(data){
		$('#chatbox').html(data);
		
	});
	},1000);
	

	$('#tac').keypress(function(e){
	if (e.which==13) {
		if (!e.shiftKey) {
			e.preventDefault();
			if ($('#tac').val()) {
				$.get('<?=url('curhat/kirim')?>',{
					pesan:$('#tac').val(),
					user_terima:$('#user_terima').text()
				},function(){});
			};
$('#tac').val('');

		};
	};
	});
	});
</script>
@endsection