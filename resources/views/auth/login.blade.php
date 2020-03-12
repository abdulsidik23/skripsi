@extends('layouts.masterfront')
@section('title','Form')


@section('content')

<div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed overflow-hidden">
                        <!-- Section Content -->
                        <div class="push-100-t push-50 text-center">
                            <h1 class="h2 text-white push-10">Login</h1>
                            <?php if($error =='login'){?>
                            <h2 class="h4 text-white-op">Jika ingin menggunakan fasilitas tanya jawab atau konsultasi seputar NRS <!-- <br>dengan pembimbing oleh Ust. Nanang Supratman, S.PdI, M.Pd <br>-->
                            bisa mendaftar dulu dengan klik <a href="<?=url('/daftar')?>">Disini</a> <br>Namun jika telah memiliki akun maka bisa langsung login dibawah ini :
</h2>
                            <?php } ?>
                        </div>
                        <!-- END Section Content -->
                    </section>
                </div>
<div class="col-md-4"></div>

<div class="col-md-4">
<div class="panel panel-default">
	<div class="panel-body">
		<?php if ($error && $error !='login') {
		?>
		<div class="alert alert-danger">
		<?php 
		if ($error=='password') 
			echo "Password Salah";
			else if ($error=='username')
			echo "Username Salah"; 
		?>
		</div>
		<?php
		} ?>
		<form action="<?=url('login')?>" method="post">
			<input type='hidden' name='_token' value='{{csrf_token()}}'>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" placeholder='username' name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder='password' name="password">
			</div>
			<div style="margin:auto;">
				<button type='submit' class="btn btn-success">OK</button>
			</div>
		</form>
	</div>
</div>
</div>
@endsection