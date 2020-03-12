@extends('layouts.masterfront')
@section('title','Form')


@section('content')

<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">Daftar</h1>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<div class="col-md-4"></div>

<div class="col-md-4">
<div class="panel panel-default">
	<div class="panel-body">
		<form action="<?=url('daftar')?>"id='form1' method='post'>
		<input type="hidden" name="_token" value="{{ csrf_token()}}">
		<div class="form-group">
			<label>Username</label> 
			<input type='text' id="txtusername" class='form-control' placeholder='Username' name="username">	
		</div>
			<div class="form-group">
			<label>Password</label> 
			<input type='password' class='form-control' placeholder='Password' name="password">	
		</div>
		<div style="margin:auto; width:30%">
			<button style="width:100%" id="btndaftar" type="submit" class="btn btn-success">Daftar</button>
		</div>
		</form>
	</div>
</div>
    </div>
<script>
	$(document).ready(function(){

		$('#btndaftar').click(function(e){
			e.preventDefault();
			$.get('<?=url('daftar/cekusername')?>',{
				username:$('#txtusername').val()
			},function(data){
				if (data=='error') {
					alert('Username Sudah Digunakan, Silahkan Ganti Username');
					$('#txtusername').select();
				e.preventDefault();
				}
				else {var a=$('#form1').submit();
			}
			});
		});
	});
</script>
@endsection